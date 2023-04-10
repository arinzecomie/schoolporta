<div id="main-news"><!--start news-->
	<div id="sub-news">

{foreach from=$news item=n}
    	<div class="news-one">
            <div class="newsup">
            	<div class="news-icon">
                	<img src="images/news.png"/>
                </div>
                <div class="news-head-text">
                	<p>{$n.title|escape:html}</p>
                </div>
            </div>
            <div class="news-text">
            	<p> {$n.small_text|escape:html}</p>
            </div>
            <div class="news-date-read">
            	<div class="date">
                	<p>{$n.d}</p>
                </div>
                <div class="readn">
                	<a href="{"?a=news#`$n.id`"|encurl}">Read More</a>
                </div>
            </div>
        </div>
{/foreach}

       </div>
</div><!--end news-->
