const express = require("express");
const { createConnection } = require("typeorm");

const app = express();

createConnection()
  .then(() => {
    console.log("Connected to database");
  })
  .catch((error) => {
    console.log("Error connecting to database:", error);
  });

app.set("view engine", "ejs");

app.get("/", function (req, res) {
  res.render("pages/home");
});
app.get("/form", function (req, res) {
  res.render("pages/form");
});

app.listen(3002);
