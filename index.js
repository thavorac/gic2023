const express = require("express");

const app = express();
app.set("view engine", "ejs");

// const bar = () => console.log("bar");
// const baz = () => console.log("baz");
// const foo = () => {
//   console.log("foo");
//   setTimeout(bar, 0);
//   new Promise((rs, rj) => {
//     rs("promised call back");
//   }).then((r) => console.log(r));
//   baz();
// };
app.get("/", function (req, res) {
  // foo();
  res.render("pages/home");
});

app.listen(3002);
