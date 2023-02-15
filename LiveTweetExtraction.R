library(twitteR)
library(httr)
requestURL = "https://api.twitter.com/oauth/request_token"
accessURL = "https://api.twitter.com/oauth/access_token"
authURL = "https://api.twitter.com/oauth/authorize"
consumerKey = "Plwiyg7BNKzxRUB59AUmCEDY3"
consumerSecret = "urZh7hhCBy4zgAKu0LfZibReVcfQXXKTFxjeIe1OiyqiLWFStC"

accessToken = "282920491-wyg0wcCC0hHfKeQordNeZfZL3eN1HI3cfTFzTkPz"
accessSecret = "	ISAiOXeJ5EWpSEs4kjet9TcUo3YUVQp54TlsDarelBnis"

setup_twitter_oauth(consumerKey,consumerSecret,accessToken,accessSecret)

r_stats <- searchTwitter("#leicester", n=500)
#head( r_stats )

r_stats.df <- do.call(rbind, lapply(r_stats, as.data.frame))
write.csv(r_stats.df, "E:/Mini Project/R Language/sampletweet70.csv")
