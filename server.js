

module.exports.sql_start = () =>{
var express    = require("express");
 var mysql      = require('mysql');
 var connection = mysql.createConnection({
	    host     : 'localhost',
	    user     : 'root',
	    password : 'rhelper',
	    database : 'mysql',
	    socketPath: '/var/run/mysqld/mysqld.sock'
	  });
 var app = express();
 var path = require("path");
app.get('/',function(req,res){
	  res.sendFile(path.join('/var/www/html/google.html'));
	  //__dirname : It will resolve to your project folder.
});
app.listen(3000);
console.log("Server running at Port 3000");
 connection.connect(function(err) {
	   if (err) throw err;
	   console.log("Connected!");

 });
};


