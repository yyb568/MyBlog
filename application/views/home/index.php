
<!DOCTYPE html>
<html lang="zh-cmn-Hans" class="no-js">
<head>
<title>尹义斌 · Blog</title>
<meta charset="utf-8" /> 
<meta property="og:site_name" content="尹义斌个人主页" />
<link rel="stylesheet" href="<?=static_url("css")?>style.min.css" type="text/css" />
<script src="<?=static_url("js")?>jquery-1.9.1.min.js"></script>
<script src="<?=static_url("js")?>skel.min.js"></script>
<style>

/* = 中文版细节微调
----------------------------------------------- */

body, input, textarea, h1, h2, h3, h4 {
    font-family: 'Source Sans Light', 'Apple LiSung Light', 'STHeiti Light', 'SimSun', sans-serif;
    /* Windows 下的非衬线中文字体黑体以及微软雅黑在大字号下都非常难看，无奈选用宋体↑ */
}
html.ios > body,
html.ios > input,
html.ios > textarea,
html.ios > h1,
html.ios > h2,
html.ios > h3,
html.ios > h4 {
    font-family: sans-serif;
}
body, input, textarea {
    line-height: 1.5;
    font-size: 20px;
}
html.ios > body,
html.ios > input,
html.ios > textarea {
    line-height: 1.65;
}
h3 {
    font-weight: bold;
}
.content h2 {
    margin-bottom: 0.25em;
}
.content > .container p {
    letter-spacing: -0.5px;
}
body > header .title p.subline {
    font-size: 1.5em;
    margin-top: 0.125em;
}
section#travel #maps h3 {
    letter-spacing: -1px;
    font-size: 1.2em;
}
section#photography a i {
    vertical-align: text-top;
}
section#more .description p {
    line-height: 1.45;
}
section#contact .sns-icons {
    font-size: 2.5em;
}
footer a.icp {
    font-size: 0.75em;
    color: #bbb;
}
@media (max-width: 727px) {
    body, input, textarea {
        font-size: 18px;
    }
}
@media (max-width: 535px) {
    body, input, textarea {
        font-size: 14px;
        line-height: 1.35;
    }
}
</style>
</head>
<body id="body" class="init header-fadeout">

    <!-- Header -->
    
    <header class="header">
        <div class="header-background">
        </div>
        
        <div class="title">
            <h1>我是尹义斌</h1>
            <p class="subline">欢迎走进我的世界</p>
        </div>
        
        <button class="trigger"></button>
    </header>

    <!-- Intro -->
    
    <section id="intro" class="content">
        <div class="container">
            <h2>我是</h2>
            <p>在上过两个星期小学后，我便退学回家自学，成为一名 homeschooler。从此，应试教育和学校里面所发生的一切，都与我无关。</p>
            <p>现在我 21 岁，在自学的这些年里，我自己学，做自己。追寻自己的所想所爱，并试着将各种兴趣爱好串连在一起。</p>
        </div>
    </section>

    <!-- Travel -->
    
    <section id="travel" class="content">
        <div class="container">
            <h2>行万里路</h2>
            <p>旅行，是我的主要学习方式之一，我每年有四分之一的时间都在路上。天地之间，有一本无字书，走着、看着，也思考着，永远也学不完。</p>
            <p>对我来说，走遍世界不仅仅是个梦想。</p>
        </div>
        <div id="maps">
            <h3>我在中国的旅行足迹</h3>
        </div>
    </section>

    <!-- Photography -->
    
    <section id="photography" class="content">
        <div class="container">
            <h2>光的艺术</h2>
            <p>我爱摄影，尤其是壮美的自然风光。因为旅行，我爱上了摄影；也因为摄影，我更热爱旅行。</p>
            <a href="javascript:;" data-action="reload-montage"><i class="icon-shuffle"></i> <span>换一换</span></a>
        </div>
        <div id="montage" class="row uniform 25%"></div>
    </section>

    <!-- Design -->
    
    <section id="design" class="content">
        <div class="container">
            <h2>我爱设计</h2>
            <p>我设计各种各样的东西，从平面设计到室内，再到用户界面和网页设计。</p>
            <p>我很喜欢把我的创造性发挥到极限，更享受从无到有、渐渐完美的设计过程。我爱设计，也相信它会让生活更美好。</p>
            
            <div class="row uniform">
                <figure class="6u">
                    <img src="http://v6.res.dandyweng.com/images/placeholder.png" data-original="http://v6.res.dandyweng.com/images/blog-mockup.jpg" alt="我的博客主页" />
                </figure>
                <figure class="6u">
                    <img src="http://v6.res.dandyweng.com/images/placeholder.png" data-original="http://v6.res.dandyweng.com/images/album-mockup-sideview.jpg" alt="我的影集" />
                </figure>
            </div>
        </div>
    </section>

    <!-- Programming -->
    
    <section id="programming" class="content">
        <div class="container">
            <h2>逻辑思维</h2>
            <p>我喜欢挑战自己，而编程恰好充满挑战性。更重要的是，我的逻辑思维因此得到提高。在过去六年里，我先后学了 Visual Basic、HTML、CSS、JavaScript、PHP 和 SQL 等多种计算机语言，我还在不断学习新的编程语言，比如 Swift 和 Objective-C。</p>
            <p>你现在正在浏览的网站是我的个人主页，我每年都会把它彻底地重新设计和开发一次，以展示我在过去一年中学习到的相关新知识。</p>

            <div class="row uniform 75%">
                <header class="12u">
                    <h3>这个网站的早期版本</h3>
                </header>
                <div class="7u column left">
                    <div class="row uniform 75%">
                        <a href="http://www.dandyweng.com/versions/2014/" data-version="2014" target="_blank" class="12u" rel="alternate"><img src="http://v6.res.dandyweng.com/images/placeholder.png" data-original="http://v6.res.dandyweng.com/images/thumb-2014.jpg" alt="2014" /></a>
                    </div>
                    <div class="row uniform 75%">
                        <a href="http://www.dandyweng.com/versions/2013/" data-version="2013" target="_blank" class="12u" rel="alternate"><img src="http://v6.res.dandyweng.com/images/placeholder.png" data-original="http://v6.res.dandyweng.com/images/thumb-2013.jpg" alt="2013" /></a>
                    </div>
                </div>
                <div class="5u column right">
                    <div class="row uniform 75%">
                        <a href="http://www.dandyweng.com/versions/2012/" data-version="2012" target="_blank" class="12u" rel="alternate"><img src="http://v6.res.dandyweng.com/images/placeholder.png" data-original="http://v6.res.dandyweng.com/images/thumb-2012.jpg" alt="2012" /></a>
                    </div>
                    <div class="row uniform 75%">
                        <a href="http://www.dandyweng.com/versions/2011/" data-version="2011" target="_blank" class="12u" rel="alternate"><img src="http://v6.res.dandyweng.com/images/placeholder.png" data-original="http://v6.res.dandyweng.com/images/thumb-2011.jpg" alt="2011" /></a>
                    </div>
                    <div class="row uniform 75%">
                        <a href="http://www.dandyweng.com/versions/2010/" data-version="2010" target="_blank" class="12u" rel="alternate"><img src="http://v6.res.dandyweng.com/images/placeholder.png" data-original="http://v6.res.dandyweng.com/images/thumb-2010.jpg" alt="2010" /></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Apple -->
    
    <section id="apple" class="content">
        <div class="container">
            <h2>一个 <i class="icon-apple"></i> 粉丝</h2>
            <p>我是一个铁杆“果粉”，我喜爱的不仅仅是 Apple 的产品，更推崇其标志性的极简主义设计风格。我曾排队 14 小时购得中国第一台 iPad 2，之后又为了 iPhone 4s 排队 20 小时。目前我正在学习开发 iOS app，下面这个是我的最新作品。</p>
            <a href="https://blog.dandyweng.com/2017/02/nine-months-of-work/?from=dw" target="_blank" rel="external">
                <img src="http://v6.res.dandyweng.com/images/placeholder.png" data-original="https://dn-ssl-dw-blog.qbox.me/files/2017/02/vary-home-screen-in-hand-held-iphone-7.jpg" alt="Vary iOS App" />
                <span>了解这个 app 的详情信息 &raquo;</span>
            </a>
        </div>
    </section>

    <!-- More -->
    
    <section id="more" class="content">
        <div class="container">
            <h2>我的故事</h2>
            <p>从我 18 岁起，就有幸受邀到国内一些知名高校演讲，与同龄人分享我的故事、思考和体会。下面的视频是我在同济大学的演讲，这是我第一次登上讲台，很紧张，还有些青涩。不过，还算勉强把想表达的都说出来了，如果你想更深入地了解我，那不妨一看。</p>
            
            <div class="row uniform">
                <div id="video" class="7u 12u(tablet)">
                    <a href="javascript:;" data-action="play-video" data-youku-id="XNjUyOTM0ODI0" data-youtube-id="F4BWNANyNhs">
                        <img src="http://v6.res.dandyweng.com/images/placeholder.png" data-original="http://v6.res.dandyweng.com/images/tju-speech.jpg" alt="我在同济大学的演讲" />
                        <i class="icon-play"></i>
                    </a>
                </div>
                <div class="5u 12u(tablet) description">
                    <h3>为何不走寻常路</h3>
                    <p>世界已经为我们准备了一切。大路和小路，都在我们脚下。我一直在探寻，没有犹豫，说走就走。作为一名 homeschooler，走过的、还要走的，注定都是不寻常的路。我要问问这个世界：不走寻常路，风景是否这边独好？</p>
                    <span>2013 年 12 月，上海</span>
                </div>
                <div id="player" class="12u"></div>
            </div>
            <p class="extra-links"><a href="http://v.youku.com/v_show/id_XNjUyOTM0ODI0.html" target="_blank" rel="external nofollow">去优酷观看</a> <span>|</span> <a href="https://www.youtube.com/watch?v=F4BWNANyNhs" target="_blank" rel="external nofollow">在 YouTube 上观看</a></p>
        </div>
    </section>

    <!-- Say Hello -->
    
    <section id="say-hello" class="content">
        <div class="container">
            <h2>打个招呼吧</h2>
            <p>我很期待与同龄人的交流。你的留言会被发布在我博客的<a href="https://blog.dandyweng.com/messages/" target="_blank" rel="external">留言板</a>上，我会在有空时尽快回复你。</p>
            
            <form id="comment" action="#">
                <div class="row uniform">    
                    <div class="6u 12u(tablet)"><input type="text" name="author" placeholder="称呼"></div>
                    <div class="12u"><textarea name="comment" rows="5" placeholder="留言"></textarea></div>
                    <div class="6u 12u(tablet)"><input type="text" name="email" placeholder="邮箱"></div>
                    <div class="6u 12u(tablet)"><input type="text" name="url" placeholder="个人主页或微博地址"></div>
                    <div class="12u">
                        <button id="submit" name="submit" type="submit"><i class="icon-send"></i></button>
                    </div>
                </div>
                <input type="hidden" name="comment_post_ID" value="1008" id="comment_post_ID">
                <input type="hidden" name="agent" value="Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36 dwAPI/6.0" id="comment_agent">
                <input type="hidden" name="ip" value="60.208.58.6" id="comment_ip">
            </form>
        </div>
    </section>
    
    <!-- Contact -->
    
    <section id="contact" class="content">
        <div class="container">
            <p>如果你想给我发送演讲或采访邀请，或者只是不想让你的留言被公开显示，可以发送邮件到</p>
            <a href="mailto:dandyweng@dandyweng.com">dandyweng@dandyweng.com</a>
            <p>请注意，我不会接受任何形式的工作邀请，包括摄影、设计和开发等，也不会出席任何商业性活动，与费用多少无关，望理解。</p>
            
            <h3>你可以在这些社交网络上关注我</h3>
            <a href="javascript:;">@dandyweng</a>
            
            <div class="sns-icons row uniform 0%">
                <div class="2u">
                    <a href="https://www.facebook.com/dandyweng" target="_blank" rel="external nofollow"><i class="icon-facebook"></i></a>
                </div>
                <div class="2u">
                    <a href="https://twitter.com/dandyweng" target="_blank" rel="external nofollow"><i class="icon-twitter"></i></a>
                </div>
                <div class="2u">
                    <a href="https://instagram.com/dandyweng" target="_blank" rel="external nofollow"><i class="icon-instagram"></i></a>
                </div>
                <div class="2u">
                    <a href="http://weibo.com/dandyweng" target="_blank" rel="external nofollow"><i class="icon-weibo"></i></a>
                </div>
                <div class="2u">
                    <a href="javascript:;" target="_blank" rel="external nofollow"><i class="icon-wechat"></i></a>
                </div>
                <div class="2u">
                    <a href="https://github.com/dandyweng" target="_blank" rel="external nofollow"><i class="icon-github"></i></a>
                </div>
            </div>
            
            <p>你也可以收藏<a href="https://blog.dandyweng.com/" target="_blank" rel="external">我的博客</a>关注我的新动态，在 <a href="https://www.camarts.cn/" target="_blank" rel="external">Camarts</a> 上浏览我的摄影作品。点击<a href="https://blog.dandyweng.com/2015/10/the-sixth-version-of-my-website/" target="_blank">这里</a>了解这个网站背后的设计和开发故事。</p>
        </div>
    </section>
    
    <!-- Footer -->
    
    <footer>
        <div class="container">
            <img src="http://v6.res.dandyweng.com/images/placeholder.png" data-original="http://v6.res.dandyweng.com/images/qr.png" width="100" alt="本页二维码" title="用微信扫描可分享给好友或朋友圈" />
            <div id="back-to-top" data-action="scroll-to-top">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewbox="0 0 64 64">
                    <path fill="#cf4a5c" d="M42.057,37.732c0,0,4.139-25.58-9.78-36.207c-0.307-0.233-0.573-0.322-0.802-0.329
                    c-0.227,0.002-0.493,0.083-0.796,0.311c-13.676,10.31-8.95,35.992-8.95,35.992c-10.18,8-7.703,9.151-1.894,23.262
                    c1.108,2.693,3.048,2.06,3.926,0.115c0.877-1.943,2.815-6.232,2.815-6.232l11.029,0.128c0,0,2.035,4.334,2.959,6.298
                    c0.922,1.965,2.877,2.644,3.924-0.024C49.974,47.064,52.423,45.969,42.057,37.732z M31.726,23.155
                    c-2.546-0.03-4.633-2.118-4.664-4.665c-0.029-2.547,2.012-4.587,4.559-4.558c2.546,0.029,4.634,2.117,4.663,4.664
                    C36.314,21.143,34.272,23.184,31.726,23.155z"/>
                </svg>
            </div>
            <p>
                已有 <span id="count" title="当前版本：505795">927,950</span> 人次访问<br>
                <a href="http://www.miitbeian.gov.cn/" class="icp" target="_blank" rel="external nofollow">沪 ICP 备 14026031 号</a><br>
                <a href="https://www.qiniu.com/" class="icp" target="_blank" rel="external nofollow">感谢七牛云存储赞助提供 CDN 服务</a><br>
                Designed and developed by Dandy Weng.<br>
                Copyright © 2011-2017 dandyweng.com. All Rights Reserved.
            </p>
            <p style="text-indent: -9999px;"><script src="//s9.cnzz.com/stat.php?id=3817169&amp;web_id=3817169"></script></p>
        </div>
    </footer>
    
    <script src="<?=static_url("js")?>plugins.js"></script>
    <script src="<?=static_url("js")?>scripts.min.js"></script>
</body>
</html> 
