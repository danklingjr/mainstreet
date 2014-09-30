<? 

$page_class = "about";
$page_id = "about";
$page_title = "About Us";
$meta_keywords = "";
$meta_description = "";

include('../includes/header.php'); ?>

            <section class="content__page--sidebar group">
                <aside class="sidebar grid-25 no-margin">
                    <h3 class="">Affiliates &amp; Partnerships</h3>
                    <p><a href="">American Fence Association</a></p>
                    <p><a href="">Better Business Bureau</a></p>
                    <p><a href="">Glenside Chamber of Commerce</a></p>
                    <p><a href="">North Penn Youth Wrestling</a></p>
                    <p><a href="">St. Lukes CYO</a></p>
                    <p><a href="">Glenside Athletic Club</a></p>
                    <p><a href="">Kevin From Heaven Foundation</a></p>
                    <p><a href="">Bishop Mcdevitt Lancers Alumni Football Association</a></p><br>

                    <h3>Awards</h3>
                    <img src="<? if ($page_id != 'home') { echo '../'; } ?>img/angieslist.jpg" alt="">
                </aside>
                <div class="main grid-75">
                    <figure class="gallery__main">
                        <img src="<? if ($page_id != 'home') { echo '../'; } ?>img/office.jpg" alt="">
                    </figure>

                    <div class="content__projects--single">
                        <h1>About this project</h1>
                        <p>Lorem ipsum dolor sit amet, ad duo duis illud nominati, audire saperet democritum mel ut. Has at prima ipsum volumus, ea vis homero option vidisse. Mei scaevola partiendo patrioque et, an everti eruditi tractatos eos, errem tamquam recusabo et qui. Et has accumsan dissentias.</p>
                        
                        <p>Lorem ipsum dolor sit amet, ad duo duis illud nominati, audire saperet democritum mel ut. Has at prima ipsum volumus, ea vis homero option vidisse. Mei scaevola partiendo patrioque et, an everti eruditi tractatos eos, errem tamquam recusabo et qui. Et has accumsan dissentias.</p>
                        
                    </div>
                </div>
            </section>

<? include('../includes/footer.php'); ?>