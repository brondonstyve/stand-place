@include('compte/entete_menu_bar', ['etat'=>'Blog'])



@if (sizeOf($reponse)==0)
<h3 class="name">
            Aucun sujet en vu pour le moment
    </h3>
@else


    <section id="main-container" class="main-content container inner">
        <div class="row">
            <div id="main-content" class="col-xs-12 col-md-9 col-sm-12 col-xs-12">
                <div id="primary" class="content-area">
                    <div id="content" class="site-content detail-post" role="main">


                        <article id="post-201"
                            class="post-201 post type-post status-publish format-standard has-post-thumbnail hentry category-advices tag-apus tag-travel tag-wordpress">
                            <div class="info">
                                <h4 class="entry-title">
                                    <a href="#">Dernière publication</a>
                                </h4>
                                <div class="entry-meta">
                                    <a href="#"><i class="mn-icon-1102"></i> {{ $reponse[0]->created_at }} </a>

                                    <h2 class="post-author"> {{ $reponse[0]->titre }}</h2>
                                </div>
                            </div>

                            <div class="entry-thumb ">
                                <div class="post-thumbnail">
                                    <img src="images/blog.PNG" class="attachment-full size-full wp-post-image" height=400px width=600px></div>
                            </div>
                            <div class="detail-content">

                                <div class="single-info info-bottom">
                                    <div class="entry-description">
                                        <h5  >Description</h5>
                                        <p> {{ $reponse[0]->description }}</p>
                                    </div><!-- /entry-content -->
                                </div>
                            </div>
                        </article>


                        <div id="comments" class="comments-area">

                            <h3 class="comments-title">2 Comments</h3>
                            <ol class="comment-list">
                                <li class="comment even thread-even depth-1" id="comment-2">

                                    <div class="the-comment media">
                                        <div class="avatar media-left">
                                            <img src="http://1.gravatar.com/avatar/1e92015069e8f1d92d77daa9882db0b9?s=70&amp;d=mm&amp;r=g"
                                                alt=""
                                                class="avatar avatar-70wp-user-avatar wp-user-avatar-70 alignnone photo avatar-default"
                                                width="70" height="70"> </div>

                                        <div class="comment-box media-body">
                                            <div class="comment-author clearfix">
                                                <strong>Chris Walker Senior</strong>
                                                <span class="date-comment"> - January 14, 2017</span>

                                            </div>
                                            <div class="comment-text">
                                                <p>Readymade crucifix typewriter schlitz quinoa, put a bird on it blue
                                                    bottle stumptown tofu tacos blog pabst poutine wayfarers. Street art
                                                    chicharrones bicycle rights, farm-to-table post-ironic taxidermy forage
                                                    mumblecore.</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ol><!-- .comment-list -->





                            <div class="commentform row reset-button-default">
                                <div class="col-sm-12">
                                    <div id="respond" class="comment-respond">
                                        <form action="" method="post"
                                            id="commentform" class="comment-form" novalidate="">
                                            <div class="form-group h-info">Ajouter un commentaire</div>
                                            <div class="form-group">
                                                <p class="input-title">mon commentaire</p>
                                                <textarea rows="8" placeholder="mon commentaire" id="comment"
                                                    class="form-control" name="comment" aria-required="true"></textarea>
                                            </div>

                                            <p class="form-submit">
                                                <input name="submit" type="submit" id="submit" class="btn btn-dark  " value="Ajouter un commentaire">
                                            </p>
                                        </form>
                                    </div><!-- #respond -->
                                </div>
                            </div>
                        </div><!-- .comments-area -->
                    </div><!-- #content -->
                </div><!-- #primary -->
            </div>
            <div class="col-md-3 col-sm-12 col-xs-12 pull-right">
                <aside class="sidebar sidebar-right" itemscope="itemscope" itemtype="http://schema.org/WPSideBar">

                    <aside id="apus_recent_post-2" class="widget widget_apus_recent_post">
                        <h2 class="widget-title"><span>Derniers Post</span></h2>
                        <div class="post-widget media-post-layout widget-content">
                            <ul class="posts-list">
                                @for ($i = 0; $i < sizeOf($reponse); $i++)
                                <li>
                                        <article class="post post-list">

                                            <div class="entry-content media">

                                                <h6>sujet {{ $i+1 }}</h6>
                                                <div class="media-left">
                                                    <figure class="entry-thumb effect-v6">
                                                        <a href="#"
                                                            title="" class="entry-image">
                                                            <img src="images/blog.PNG"
                                                                class="attachment-widget size-widget wp-post-image" alt=""
                                                                width="870" height="579"> </a>
                                                    </figure>
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="entry-title">
                                                        <a
                                                            href="#">{{ $reponse[$i]->titre }}</a>
                                                    </h4>
                                                    <div class="entry-content-inner clearfix">
                                                        <div class="entry-meta">
                                                            <div class="entry-create">
                                                                <span class="entry-date">{{ $reponse[$i]->created_at }}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </li>
                                @endfor


                            </ul>
                        </div>
                    </aside>
                </aside>
            </div>
        </div>
    </section>
@endif






@include('flashy::message')
@include('compte/script')
