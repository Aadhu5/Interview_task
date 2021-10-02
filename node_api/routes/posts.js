var express = require('express');
var router = express.Router();

const mongoose = require('mongoose');
const news_feed = require('../modules/new_posts');

/*///////////////////////////////////////////// Default */
router.get('/', function(req, res, next) {
  res.send('Orders');
});
/*///////////////////////////////////////////// Save */
router.post('/add', function(req, res, next) {
    let flufy = new news_feed({
        file_url:req.body.file_url,
        message:req.body.message
    });
    flufy.save(function(err,flufy){
        if(err)
        {
            res.send(err);
        } else {
            res.send(flufy);
        }
    });
});
/*///////////////////////////////////////////// List */
router.post('/list', function(req, res, next) {
    news_feed.find(function(err,response){
        if(err)
        {
            res.send(err);
        } else {
            res.send(response);
        }
    }).skip(req.body.page_no * 5).limit(5);
});
/*///////////////////////////////////////////// END */


module.exports = router;