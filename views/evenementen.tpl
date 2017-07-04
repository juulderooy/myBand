


<div class="opening">
        <video id="despo" autoplay loop="1" >
                <source src="images/gif.mp4"  type="video/mp4">
        </video>
</div>
<section>


        <h1>Agenda</h1>
        {foreach from=$article_list item=one_article}

            <div class="background">

                <article class="artikel">
                <h1> {$one_article.title} </h1>
                <img src="{$one_article.image}" height="200"/>
                        <br>
                <content> {$one_article.content} </content>

                </article>
            </div>
        {/foreach}



</section>






