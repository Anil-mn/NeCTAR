<?php



$faqHead= ' <div class="faq-page-area">
<div class="container">
    <div class="row panel-group" id="faq-accordian">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">';
        
        $col = '<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">';
        $col2 ='<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="about-page-img-holder">
            <img src="img/about/2.jpg" class="img-responsive" alt="about">
        </div>';

        Function faq($heading,$count,$num,$dis){
           echo '<div class="faq-box-wrapper">
            <div class="faq-box-item panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title faq-box-title">
                        <h3>
                                <a aria-expanded="false" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse'.$num.'"><span class="faq-box-count">'.$count.'</span>'.$heading.'
                                </a>
                            </h3>
                    </div>
                </div>
                <div aria-expanded="false" id="collapse'.$num.'" role="tabpanel" class="panel-collapse collapse">
                    <div class="panel-body faq-box-body">
                        <p>'.$dis.'</p>
                    </div>
                </div>
            </div>
        </div>';
        }
 
        $faqEnd= '</div>
        </div>
    </div>
</div>';