var mongoose = require('mongoose');
let mongooseHidden = require("mongoose-hidden")();

var postschema = new mongoose.Schema({
    file_url: String,
    message: String
});
postschema.set("toJSON", {
    virtuals: false,
});
postschema.plugin(mongooseHidden);

var news_feed = mongoose.model("news_feed",postschema,"news");

module.exports = news_feed;

