var express = require('express');
var fs = require('fs');
var htmlfile = "index.php";

var app = express.createServer(express.logger());


app.get('/', function(request, response) {
   var html = fs.readFileSync(htmlfile).toString();
   response.send(html);
});

var port = process.env.PORT || 8080;
app.listen(port, function() {
  console.log("Listening on " + port);
});
