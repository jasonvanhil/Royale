			<div class="paca-carousel-wrap" style="display:none;">
				<div class="paca-carousel-items paca-slider-carousel" data-slick='{"slidesToShow": 4, "slidesToScroll": 4,"responsive":[{ "breakpoint": 400, "settings": { "slidesToShow": 1, "slidesToScroll": 1 } }]}'>
					<?php $i=1; while($i <= 10){?>

						<article class="col-xs-12 paca-standard-grid">

							<header>
								<div class="figure-wrapper overlay-animation">
									<figure>
										<img src="<?php echo get_template_directory_uri() ?>/assets/img/small-<?php echo rand(1,5) ?>.jpg" title="title here" alt="alt-here" class="img-responsive featured-image" />
										<a href="#" class="post-link" title="title here" alt="alt-here"></a>
										<figcaption>
											<div class="post-info post-info-centre">
												<i class="icon fa fa-arrow-right fa-2x" aria-hidden="true"></i>
											</div>
										</figcaption>
									</figure>
								</div>
							</header>






							<footer>
								
								<h4 class="item-title"><a href="#" title="title here" alt="alt here">Title goes here</a></h4>
								<div class="post-meta">
									<span class="author">By <a href="#">Jason Van Hil</a></span> /
									<span class="posted">
										<span class="date">1 min ago</span>
										<time datetime="2016-06-06" itemprop="datePublished" class="hidden">06 June 2016</time>
									</span> /
									<span class="comments">20 comments</span>
								</div>

								<content class="item-contents">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus posuere mattis ligula id consectetur. Nullam pellentesque blandit dolor, eleifend rhoncus magna rutrum…</p>
								</content>
								
							</footer>



						</article>



					<?php $i++;} ?>
				</div>
			</div>