<?php
/**
 * @package news
 */

get_header();

?>
   <div role="main" class="main-container  js-quickedit-main-content">
      <div class="">
            <div class="top-page-header">
                <div class="container" role="heading">
                    <div class="region region-header">
                        <h1 class="page-header"><?php echo get_the_archive_title(  ); ?></h1>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="region region-tabs">
                    <div data-drupal-messages-fallback class="hidden"></div>

                    </div>
                 </div>

                
                <section>
                    <a id="main-content"></a>
                    <div class="region region-content">
                        <div  id="">
                            <div class="lh-row-1">
                                <div class="container">
                                    <div class="block-region-row-1">
                                        <section class="views-element-container block block-views block-views-blockarticles-category-slider clearfix">
                                           <div class="form-group"><div class="view view-articles view-id-articles view-display-id-category_slider js-view-dom-id-f995557f9eb95f50ab375ecae606fd7eb8f7457af12001fc47d64c6df5f68450">

                                                <div class="view-content">
                                                    <div data-blazy="" class="slick slick--view--articles slick--view--articles--category-slider unslick blazy slick--skin--default slick--optionset--front-slider slick--less" id="slick-views-articles-category-slider-1" dir="rtl"><div class="slick__slide slide slide--0"><div class="node node--type-article node--view-mode-slide ds-1col clearfix" onclick="">
                                                        <div class="field field--name-field-image field--type-entity-reference field--label-hidden field--item">
                                                            <figure class="row bs-1col media media--type-image media--view-mode-slide">
                                                                <div class="col-sm-12 bs-region bs-region--main">
                                                                    <div class="field field--name-field-image field--type-image field--label-hidden field--item">
                                                                        <picture><!--[if IE 9]><video style="display: none;"><![endif]-->
                                                                            <source srcset="" alt="" title="لم يطرح المرسوم على النقاش العام " typeof="foaf:Image" class="img-responsive" />
                                                                        </picture>
                                                                    </div>
                                                                </div>
                                                            </figure>
                                                        </div>
                                                    <div class="field field--name-node-title field--type-ds field--label-hidden field--item"><h1 class="xlarge"><a href="" hreflang="ar">ترامب يفرض 15 ألف دولار على المسافرين من 6 دول عربية</a></h1></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                 </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
            <div class="lh-3-3-3-col-wrapper lh-row-6 ">
                <div class="container">
                    <div class="row">
                        <div class="lh-content col-sm-8">
                            <div class="block-region-row-6-content">
                            <section class="views-element-container block block-views block-views-blockarticles-category-latest clearfix">
                            <?php 
                                if(have_posts(  )):
                                    echo '<div class="page-limit" data-page="'. $_SERVER["REQUEST_URI"] .' ">';
                                    while(have_posts(  )):the_post(  );
                                        echo the_content();
                                        echo "Fffffffffffffffffffff";
                                      //  get_template_part( 'template-parts/content', get_post_format(  ) );
                                    endwhile;
                                    echo "</div>";
                                endif;
                            ?>
                                <div class="form-group">
                                    <div class="row-spaces view view-articles view-id-articles view-display-id-category_latest ">
                                        <div class="view-content">
                                            <div class="views-row">
                                                <article class="row node node--type-article node--view-mode-large ds-2col clearfix" onclick="">
                                                     <div class="col-sm-4 col-xs-5 group-left">
                                                        <div class="field field--name-field-image field--type-entity-reference field--label-hidden field--item">
                                                            <div>
                                                                <div class="field field--name-field-image field--type-image field--label-hidden field--item">  
                                                                    <img src="" width="390" height="300" alt="" title="سيكون لكل شخص جرعتان" typeof="foaf:Image" class="img-responsive" />
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-8 col-xs-7 group-right">
                                                        <div class="field field--name-node-title field--type-ds field--label-hidden field--item">
                                                            <h1 class="medium">
                                                                <a href="" hreflang="ar">الكويت تعتزم تحديد طرق تلقي لقاحات كورونا.. ولا رسوم على المقيمين</a>
                                                            </h1>
                                                        </div>
                                                            <div class="field field--name-body field--type-text-with-summary field--label-hidden field--item"><p>أعلنت وزارة الصحة الكويتية، يوم الخميس، أنها تعكف على تحديد طرق تلقي لقاح فايزر الخاص بكورونا.</p>
                                                        </div>

            <div class="field field--name-node-link field--type-ds field--label-hidden field--item">  
                <a href="" class="fas fa-angle-left" hreflang="ar">اقرأ المزيد</a>
            </div>
        </div>
</article>

</div>
   

<section class="views-element-container block block-views block-views-blockarticles-news-ticker clearfix" id="block-views-block-articles-news-ticker">



      <div class="form-group"><div class="view view-articles view-id-articles view-display-id-news_ticker js-view-dom-id-60e420243fef565c1d19571a010ce7bf9202509e265efcd20f74a62212d7e3f3">



      <div class="view-content">
      <div class="clock">
        <div id="liveclock"></div>
        <div id="timezone">مكة المكرمة</div>
      </div>
      <div>

  <ul>

          <li><div class="col-xs-12 node node--type-article node--view-mode-title ds-1col clearfix">




            <div class="field field--name-node-title field--type-ds field--label-hidden field--item"><h1 class="small">
  <a href="/%D8%B3%D9%8A%D8%A7%D8%B3%D8%A9/%D9%88%D8%B2%D9%8A%D8%B1-%D8%A7%D9%84%D8%AF%D9%81%D8%A7%D8%B9-%D8%A7%D9%84%D8%AA%D8%B1%D9%83%D9%8A-%D9%8A%D8%B7%D8%A7%D9%84%D8%A8-%D8%A3%D9%81%D8%BA%D8%A7%D9%86%D8%B3%D8%AA%D8%A7%D9%86-%D8%A8%D8%A5%D8%B9%D8%A7%D8%AF%D8%A9-%D8%A7%D9%84%D9%86%D8%B8%D8%B1-%D9%81%D9%8A-%D8%A7%D8%AA%D9%81%D8%A7%D9%82-%D9%85%D8%B9-%D8%A7%D9%84%D8%A5%D9%85%D8%A7%D8%B1%D8%A7%D8%AA" hreflang="ar">وزير الدفاع التركي يطالب أفغانستان بإعادة النظر في اتفاق مع الإمارات</a>
</h1>
</div>


</div>

</li>
          <li><div class="col-xs-12 node node--type-article node--view-mode-title ds-1col clearfix">




            <div class="field field--name-node-title field--type-ds field--label-hidden field--item"><h1 class="small">
  <a href="/%D8%B3%D9%8A%D8%A7%D8%B3%D8%A9/%D8%A7%D9%84%D8%B9%D8%B7%D9%8A%D8%A9-%D9%8A%D8%A8%D8%AD%D8%AB-%D8%A7%D9%84%D8%B9%D9%84%D8%A7%D9%82%D8%A7%D8%AA-%D8%A7%D9%84%D8%B9%D8%B3%D9%83%D8%B1%D9%8A%D8%A9-%D9%85%D8%B9-%D9%88%D8%B2%D9%8A%D8%B1-%D8%A7%D9%84%D8%AF%D9%81%D8%A7%D8%B9-%D8%A7%D9%84%D8%A3%D9%85%D8%B1%D9%8A%D9%83%D9%8A" hreflang="ar">العطية يبحث العلاقات العسكرية مع وزير الدفاع الأمريكي</a>
</h1>
</div>


</div>

</li>
          <li><div class="col-xs-12 node node--type-article node--view-mode-title ds-1col clearfix">




            <div class="field field--name-node-title field--type-ds field--label-hidden field--item"><h1 class="small">
  <a href="/%D8%B3%D9%8A%D8%A7%D8%B3%D8%A9/%D8%A7%D9%84%D8%AE%D8%A7%D8%B1%D8%AC%D9%8A%D8%A9-%D8%A7%D9%84%D8%B9%D8%B1%D8%A7%D9%82%D9%8A%D8%A9-%D8%A7%D9%84%D8%A5%D9%85%D8%A7%D8%B1%D8%A7%D8%AA-%D9%84%D9%85-%D8%AA%D8%A8%D9%84%D8%BA%D9%86%D8%A7-%D8%A8%D8%A5%D9%8A%D9%82%D8%A7%D9%81-%D8%AA%D8%A3%D8%B4%D9%8A%D8%B1%D8%A7%D8%AA-%D8%A7%D9%84%D8%AF%D8%AE%D9%88%D9%84-%D9%84%D9%85%D9%88%D8%A7%D8%B7%D9%86%D9%8A%D9%86%D8%A7" hreflang="ar">الخارجية العراقية: الإمارات لم تبلغنا بإيقاف تأشيرات الدخول لمواطنينا</a>
</h1>
</div>


</div>

</li>
          <li><div class="col-xs-12 node node--type-article node--view-mode-title ds-1col clearfix">




            <div class="field field--name-node-title field--type-ds field--label-hidden field--item"><h1 class="small">
  <a href="/%D9%85%D8%AC%D8%AA%D9%85%D8%B9/%D8%AA%D8%B1%D8%A7%D9%85%D8%A8-%D9%8A%D9%81%D8%B1%D8%B6-15-%D8%A3%D9%84%D9%81-%D8%AF%D9%88%D9%84%D8%A7%D8%B1-%D8%B9%D9%84%D9%89-%D8%A7%D9%84%D9%85%D8%B3%D8%A7%D9%81%D8%B1%D9%8A%D9%86-%D9%85%D9%86-6-%D8%AF%D9%88%D9%84-%D8%B9%D8%B1%D8%A8%D9%8A%D8%A9" hreflang="ar">ترامب يفرض 15 ألف دولار على المسافرين من 6 دول عربية</a>
</h1>
</div>


</div>

</li>
          <li><div class="col-xs-12 node node--type-article node--view-mode-title ds-1col clearfix">




            <div class="field field--name-node-title field--type-ds field--label-hidden field--item"><h1 class="small">
  <a href="/%D8%A7%D9%82%D8%AA%D8%B5%D8%A7%D8%AF/%D8%A7%D8%B1%D8%AA%D9%81%D8%A7%D8%B9-%D9%81%D8%A7%D8%A6%D8%B6-%D8%A7%D9%84%D9%85%D9%8A%D8%B2%D8%A7%D9%86-%D8%A7%D9%84%D8%AA%D8%AC%D8%A7%D8%B1%D9%8A-%D8%A7%D9%84%D9%82%D8%B7%D8%B1%D9%8A-%D8%A8%D9%86%D8%B3%D8%A8%D8%A9-95" hreflang="ar">ارتفاع فائض الميزان التجاري القطري بنسبة 9.5% </a>
</h1>
</div>


</div>

</li>
          <li><div class="col-xs-12 node node--type-article node--view-mode-title ds-1col clearfix">




            <div class="field field--name-node-title field--type-ds field--label-hidden field--item"><h1 class="small">
  <a href="/%D8%B1%D9%8A%D8%A7%D8%B6%D8%A9/%D9%86%D9%87%D8%A7%D8%A6%D9%8A-%D8%A7%D9%84%D9%82%D8%B1%D9%86-%D9%8A%D8%AD%D8%A8%D8%B3-%D8%A7%D9%84%D8%A3%D9%86%D9%81%D8%A7%D8%B3-%D9%85%D9%86-%D9%8A%D8%B8%D9%81%D8%B1-%D8%A8%D8%A7%D9%84%D8%A3%D9%85%D9%8A%D8%B1%D8%A9-%D8%A7%D9%84%D8%A3%D9%81%D8%B1%D9%8A%D9%82%D9%8A%D8%A9-%D8%A7%D9%84%D8%A3%D9%87%D9%84%D9%8A-%D8%A3%D9%85-%D8%A7%D9%84%D8%B2%D9%85%D8%A7%D9%84%D9%83%D8%9F" hreflang="ar">&quot;نهائي القرن&quot; يحبس الأنفاس.. من يظفر بالأميرة الأفريقية: الأهلي أم الزمالك؟</a>
</h1>
</div>


</div>

</li>
          <li><div class="col-xs-12 node node--type-article node--view-mode-title ds-1col clearfix">




            <div class="field field--name-node-title field--type-ds field--label-hidden field--item"><h1 class="small">
  <a href="/%D8%A7%D9%82%D8%AA%D8%B5%D8%A7%D8%AF/%D9%81%D9%8A%D8%AA%D8%B4-%D8%AA%D9%85%D9%86%D8%AD-%D8%A8%D9%86%D9%83-%D8%A7%D9%84%D9%83%D9%88%D9%8A%D8%AA-%D8%A7%D9%84%D8%AF%D9%88%D9%84%D9%8A-%D8%AA%D8%B5%D9%86%D9%8A%D9%81%D8%A7%D9%8B-%D8%A7%D8%A6%D8%AA%D9%85%D8%A7%D9%86%D9%8A%D8%A7%D9%8B-%D8%B9%D9%86%D8%AF" hreflang="ar">&quot;فيتش&quot; تمنح بنك الكويت الدولي تصنيفاً ائتمانياً عند &quot;-A&quot;</a>
</h1>
</div>


</div>

</li>
          <li><div class="col-xs-12 node node--type-article node--view-mode-title ds-1col clearfix">




            <div class="field field--name-node-title field--type-ds field--label-hidden field--item"><h1 class="small">
  <a href="/%D8%B9%D9%84%D9%88%D9%85-%D9%88%D8%AA%D9%83%D9%86%D9%88%D9%84%D9%88%D8%AC%D9%8A%D8%A7/%D8%A7%D9%84%D8%AC%D9%8A%D8%B4-%D8%A7%D9%84%D8%A3%D9%85%D8%B1%D9%8A%D9%83%D9%8A-%D9%8A%D8%B7%D9%88%D8%B1-%D8%AA%D9%82%D9%86%D9%8A%D8%A9-%D9%84%D9%82%D8%B1%D8%A7%D8%A1%D8%A9-%D8%A7%D9%84%D8%B9%D9%82%D9%88%D9%84-%D9%88%D8%A7%D9%84%D8%AA%D8%AE%D8%A7%D8%B7%D8%A8-%D8%A8%D8%A7%D9%84%D8%A3%D9%81%D9%83%D8%A7%D8%B1" hreflang="ar">الجيش الأمريكي يطور تقنية لقراءة العقول والتخاطب بالأفكار</a>
</h1>
</div>


</div>

</li>
          <li><div class="col-xs-12 node node--type-article node--view-mode-title ds-1col clearfix">




            <div class="field field--name-node-title field--type-ds field--label-hidden field--item"><h1 class="small">
  <a href="/%D8%A7%D9%82%D8%AA%D8%B5%D8%A7%D8%AF/%D8%B3%D8%AA%D8%A7%D9%86%D8%AF%D8%B1%D8%AF-%D8%A2%D9%86%D8%AF-%D8%A8%D9%88%D8%B1%D8%B2-%D8%AA%D9%88%D9%82%D8%B9%D8%A7%D8%AA-%D8%A8%D8%A7%D9%86%D9%83%D9%85%D8%A7%D8%B4-%D8%A7%D9%84%D8%A7%D9%82%D8%AA%D8%B5%D8%A7%D8%AF-%D8%A7%D9%84%D8%A5%D9%85%D8%A7%D8%B1%D8%A7%D8%AA%D9%8A-%D8%A8%D9%86%D8%AD%D9%88-85" hreflang="ar">&quot;ستاندرد آند بورز&quot;: توقعات بانكماش الاقتصاد الإماراتي بنحو 8.5%</a>
</h1>
</div>


</div>

</li>
          <li><div class="col-xs-12 node node--type-article node--view-mode-title ds-1col clearfix">




            <div class="field field--name-node-title field--type-ds field--label-hidden field--item"><h1 class="small">
  <a href="/%D8%A7%D9%82%D8%AA%D8%B5%D8%A7%D8%AF/%D8%A7%D9%84%D8%A5%D9%85%D8%A7%D8%B1%D8%A7%D8%AA-%D9%88%D8%A5%D8%B3%D8%B1%D8%A7%D8%A6%D9%8A%D9%84-%D8%AA%D9%88%D9%82%D8%B9%D8%A7%D9%86-%D8%A7%D8%AA%D9%81%D8%A7%D9%82%D9%8A%D8%A9-%D9%81%D9%8A-%D9%85%D8%AC%D8%A7%D9%84-%D8%A7%D9%84%D8%A3%D9%85%D9%86-%D8%A7%D9%84%D9%85%D8%A7%D8%A6%D9%8A" hreflang="ar">الإمارات و&quot;إسرائيل&quot; توقعان اتفاقية في مجال الأمن المائي</a>
</h1>
</div>


</div>

</li>
          <li><div class="col-xs-12 node node--type-article node--view-mode-title ds-1col clearfix">




            <div class="field field--name-node-title field--type-ds field--label-hidden field--item"><h1 class="small">
  <a href="/%D8%A7%D9%82%D8%AA%D8%B5%D8%A7%D8%AF/%D8%B1%D8%AC%D8%A7%D9%84-%D8%A3%D8%B9%D9%85%D8%A7%D9%84-%D8%A5%D8%B3%D8%B1%D8%A7%D8%A6%D9%8A%D9%84%D9%8A%D9%88%D9%86-%D9%8A%D9%84%D8%AA%D9%82%D9%88%D9%86-%D9%88%D8%B2%D9%8A%D8%B1-%D8%A7%D9%84%D8%AA%D8%AC%D8%A7%D8%B1%D8%A9-%D8%A7%D9%84%D8%A8%D8%AD%D8%B1%D9%8A%D9%86%D9%8A-%D9%81%D9%8A-%D8%A7%D9%84%D9%85%D9%86%D8%A7%D9%85%D8%A9" hreflang="ar">رجال أعمال إسرائيليون يلتقون وزير التجارة البحريني في المنامة</a>
</h1>
</div>


</div>

</li>
          <li><div class="col-xs-12 node node--type-article node--view-mode-title ds-1col clearfix">




            <div class="field field--name-node-title field--type-ds field--label-hidden field--item"><h1 class="small">
  <a href="/%D8%B3%D9%8A%D8%A7%D8%B3%D8%A9/%D9%82%D8%B7%D8%B1-%D8%AA%D8%B7%D8%A7%D9%84%D8%A8-%D9%85%D8%AC%D9%84%D8%B3-%D8%A7%D9%84%D8%A3%D9%85%D9%86-%D8%A7%D9%84%D8%AF%D9%88%D9%84%D9%8A-%D8%A8%D8%A5%D8%AF%D8%A7%D9%86%D8%A9-%D8%A7%D9%84%D8%A5%D8%AC%D8%B1%D8%A7%D8%A1%D8%A7%D8%AA-%D8%A7%D9%84%D9%85%D9%81%D8%B1%D9%88%D8%B6%D8%A9-%D8%B9%D9%84%D9%8A%D9%87%D8%A7" hreflang="ar">قطر تطالب مجلس الأمن الدولي بإدانة الإجراءات المفروضة عليها</a>
</h1>
</div>


</div>

</li>
          <li><div class="col-xs-12 node node--type-article node--view-mode-title ds-1col clearfix">




            <div class="field field--name-node-title field--type-ds field--label-hidden field--item"><h1 class="small">
  <a href="/%D8%B3%D9%8A%D8%A7%D8%B3%D8%A9/%D8%B1%D8%A6%D9%8A%D8%B3-%D8%A5%D8%B3%D8%B1%D8%A7%D8%A6%D9%8A%D9%84-%D9%8A%D8%B3%D8%AA%D9%82%D8%A8%D9%84-%D9%85%D9%85%D8%AB%D9%84%D9%8A%D9%86-%D8%B9%D9%86-%D8%A7%D9%84%D8%B9%D8%A7%D8%A6%D9%84%D8%A9-%D8%A7%D9%84%D9%85%D8%A7%D9%84%D9%83%D8%A9-%D8%A7%D9%84%D8%A8%D8%AD%D8%B1%D9%8A%D9%86%D9%8A%D8%A9" hreflang="ar">رئيس &quot;إسرائيل&quot; يستقبل ممثلين عن العائلة المالكة البحرينية</a>
</h1>
</div>


</div>

</li>
          <li><div class="col-xs-12 node node--type-article node--view-mode-title ds-1col clearfix">




            <div class="field field--name-node-title field--type-ds field--label-hidden field--item"><h1 class="small">
  <a href="/%D8%A7%D9%82%D8%AA%D8%B5%D8%A7%D8%AF/%D9%84%D9%85%D8%A7%D8%B0%D8%A7-%D8%B9%D8%AF%D9%84%D8%AA-%D8%A7%D9%84%D8%B3%D8%B9%D9%88%D8%AF%D9%8A%D8%A9-%D8%A7%D8%B3%D9%85-%D9%85%D8%A4%D8%B3%D8%B3%D8%A9-%D8%A7%D9%84%D9%86%D9%82%D8%AF-%D8%A5%D9%84%D9%89-%D8%A7%D9%84%D8%A8%D9%86%D9%83-%D8%A7%D9%84%D9%85%D8%B1%D9%83%D8%B2%D9%8A%D8%9F" hreflang="ar">لماذا عدلت السعودية اسم &quot;مؤسسة النقد&quot; إلى &quot;البنك المركزي&quot;؟</a>
</h1>
</div>


</div>

</li>
          <li><div class="col-xs-12 node node--type-article node--view-mode-title ds-1col clearfix">




            <div class="field field--name-node-title field--type-ds field--label-hidden field--item"><h1 class="small">
  <a href="/%D8%B3%D9%8A%D8%A7%D8%B3%D8%A9/%D8%A3%D9%85%D9%8A%D8%B1-%D9%82%D8%B7%D8%B1-%D8%A3%D8%AC%D8%B1%D9%8A%D8%AA-%D8%AC%D9%88%D9%84%D8%A9-%D9%86%D8%A7%D8%AC%D8%AD%D8%A9-%D9%85%D9%86-%D8%A7%D9%84%D9%85%D8%A8%D8%A7%D8%AD%D8%AB%D8%A7%D8%AA-%D9%85%D8%B9-%D8%A7%D9%84%D8%B1%D8%A6%D9%8A%D8%B3-%D8%A7%D9%84%D8%AA%D8%B1%D9%83%D9%8A" hreflang="ar">أمير قطر: أجريت جولة ناجحة من المباحثات مع الرئيس التركي</a>
</h1>
</div>


</div>

</li>
          <li><div class="col-xs-12 node node--type-article node--view-mode-title ds-1col clearfix">




            <div class="field field--name-node-title field--type-ds field--label-hidden field--item"><h1 class="small">
  <a href="/%D8%A7%D9%82%D8%AA%D8%B5%D8%A7%D8%AF/%D8%AA%D9%88%D8%A7%D9%81%D9%82-%D8%AE%D9%84%D9%8A%D8%AC%D9%8A-%D9%84%D9%81%D8%B1%D8%B6-%D8%B1%D8%B3%D9%88%D9%85-%D8%A5%D8%BA%D8%B1%D8%A7%D9%82-%D8%B9%D9%84%D9%89-%D8%A7%D9%84%D8%A5%D8%B3%D9%85%D9%86%D8%AA-%D8%A7%D9%84%D9%85%D8%A7%D8%A6%D9%8A-%D8%A7%D9%84%D8%A5%D9%8A%D8%B1%D8%A7%D9%86%D9%8A" hreflang="ar">توافق خليجي لفرض رسوم إغراق على الإسمنت المائي الإيراني</a>
</h1>

</div>


</div>

</li>
          <li><div class="col-xs-12 node node--type-article node--view-mode-title ds-1col clearfix">




            <div class="field field--name-node-title field--type-ds field--label-hidden field--item"><h1 class="small">
  <a href="/%D8%B3%D9%8A%D8%A7%D8%B3%D8%A9/%D9%86%D8%AA%D9%86%D9%8A%D8%A7%D9%87%D9%88-%D9%88%D8%B5%D9%88%D9%84-%D9%81%D9%84%D8%A7%D9%8A-%D8%AF%D8%A8%D9%8A-%D8%A5%D9%84%D9%89-%D8%A5%D8%B3%D8%B1%D8%A7%D8%A6%D9%8A%D9%84-%D8%AD%D8%AF%D8%AB-%D8%AA%D8%A7%D8%B1%D9%8A%D8%AE%D9%8A" hreflang="ar">نتنياهو: وصول &quot;فلاي دبي&quot; إلى &quot;إسرائيل&quot; حدث تاريخي</a>
</h1>
</div>


</div>

</li>
          <li><div class="col-xs-12 node node--type-article node--view-mode-title ds-1col clearfix">




            <div class="field field--name-node-title field--type-ds field--label-hidden field--item"><h1 class="small">
  <a href="/%D8%B3%D9%8A%D8%A7%D8%B3%D8%A9/%D8%A8%D8%B7%D9%84%D8%A8-%D9%85%D9%86-%D8%A7%D9%84%D9%85%D9%86%D8%A7%D9%85%D8%A9-%D8%AA%D8%A3%D8%AC%D9%8A%D9%84-%D8%B2%D9%8A%D8%A7%D8%B1%D8%A9-%D9%86%D8%AA%D9%86%D9%8A%D8%A7%D9%87%D9%88-%D8%A5%D9%84%D9%89-%D8%A7%D9%84%D8%A8%D8%AD%D8%B1%D9%8A%D9%86" hreflang="ar">بطلب من المنامة.. تأجيل زيارة نتنياهو إلى البحرين</a>
</h1>
</div>


</div>

</li>
          <li><div class="col-xs-12 node node--type-article node--view-mode-title ds-1col clearfix">




            <div class="field field--name-node-title field--type-ds field--label-hidden field--item"><h1 class="small">
  <a href="/%D9%85%D8%AC%D8%AA%D9%85%D8%B9/%D8%A7%D9%84%D9%83%D9%88%D9%8A%D8%AA-%D8%AA%D8%B9%D8%AA%D8%B2%D9%85-%D8%AA%D8%AD%D8%AF%D9%8A%D8%AF-%D8%B7%D8%B1%D9%82-%D8%AA%D9%84%D9%82%D9%8A-%D9%84%D9%82%D8%A7%D8%AD%D8%A7%D8%AA-%D9%83%D9%88%D8%B1%D9%88%D9%86%D8%A7-%D9%88%D9%84%D8%A7-%D8%B1%D8%B3%D9%88%D9%85-%D8%B9%D9%84%D9%89-%D8%A7%D9%84%D9%85%D9%82%D9%8A%D9%85%D9%8A%D9%86" hreflang="ar">الكويت تعتزم تحديد طرق تلقي لقاحات كورونا.. ولا رسوم على المقيمين</a>
</h1>
</div>


</div>

</li>
          <li><div class="col-xs-12 node node--type-article node--view-mode-title ds-1col clearfix">




            <div class="field field--name-node-title field--type-ds field--label-hidden field--item"><h1 class="small">
  <a href="/%D8%B3%D9%8A%D8%A7%D8%B3%D8%A9/%D9%88%D8%B2%D9%8A%D8%B1-%D8%A7%D9%84%D8%AF%D9%81%D8%A7%D8%B9-%D8%A7%D9%84%D8%A3%D9%85%D8%B1%D9%8A%D9%83%D9%8A-%D9%8A%D8%B2%D9%88%D8%B1-%D9%82%D9%88%D8%A7%D8%B9%D8%AF-%D8%A8%D9%84%D8%A7%D8%AF%D9%87-%D8%A7%D9%84%D8%B9%D8%B3%D9%83%D8%B1%D9%8A%D8%A9-%D8%A8%D8%A7%D9%84%D8%B4%D8%B1%D9%82-%D8%A7%D9%84%D8%A3%D9%88%D8%B3%D8%B7" hreflang="ar">وزير الدفاع الأمريكي يزور قواعد بلاده العسكرية بالشرق الأوسط</a>
</h1>
</div>


</div>

</li>

  </ul>

</div>

    </div>

          </div>
</div>

  </section>

<section id="block-breakingnewsjs" class="block block-alkhaleej-breaking block-breaking-news-block clearfix">



      <div class="breaking-slider">

</div>

  </section>


  </div>

                  </section>

                      </div>
    </div>


 <?php

get_footer();
