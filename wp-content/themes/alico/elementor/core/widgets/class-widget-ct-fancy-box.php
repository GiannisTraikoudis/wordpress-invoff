<?php

class CT_CtFancyBox_Widget extends Case_Theme_Core_Widget_Base{
    protected $name = 'ct_fancy_box';
    protected $title = 'Fancy Box';
    protected $icon = 'eicon-icon-box';
    protected $categories = array( 'case-theme-core' );
    protected $params = '{"sections":[{"name":"layout_section","label":"Layout","tab":"layout","controls":[{"name":"layout","label":"Templates","type":"layoutcontrol","default":"1","options":{"1":{"label":"Layout 1","image":"http:\/\/localhost\/invoff\/wp-content\/themes\/alico\/elementor\/templates\/widgets\/ct_fancy_box\/layout-image\/layout1.jpg"},"2":{"label":"Layout 2","image":"http:\/\/localhost\/invoff\/wp-content\/themes\/alico\/elementor\/templates\/widgets\/ct_fancy_box\/layout-image\/layout2.jpg"},"3":{"label":"Layout 3","image":"http:\/\/localhost\/invoff\/wp-content\/themes\/alico\/elementor\/templates\/widgets\/ct_fancy_box\/layout-image\/layout3.jpg"},"4":{"label":"Layout 4","image":"http:\/\/localhost\/invoff\/wp-content\/themes\/alico\/elementor\/templates\/widgets\/ct_fancy_box\/layout-image\/layout4.jpg"},"5":{"label":"Layout 5","image":"http:\/\/localhost\/invoff\/wp-content\/themes\/alico\/elementor\/templates\/widgets\/ct_fancy_box\/layout-image\/layout5.jpg"},"6":{"label":"Layout 6","image":"http:\/\/localhost\/invoff\/wp-content\/themes\/alico\/elementor\/templates\/widgets\/ct_fancy_box\/layout-image\/layout6.jpg"},"7":{"label":"Layout 7","image":"http:\/\/localhost\/invoff\/wp-content\/themes\/alico\/elementor\/templates\/widgets\/ct_fancy_box\/layout-image\/layout7.jpg"}}}]},{"name":"section_content","label":"Content","tab":"content","controls":[{"name":"icon_type","label":"Icon Type","type":"select","options":{"icon":"Icon","image":"Image"},"default":"icon"},{"name":"selected_icon","label":"Icon","type":"icons","fa4compatibility":"icon","condition":{"icon_type":"icon"}},{"name":"icon_image","label":"Icon Image","type":"media","description":"Select image icon.","condition":{"icon_type":"image"}},{"name":"title_text","label":"Title","type":"text","placeholder":"Enter your title","label_block":true},{"name":"description_text","label":"Description","type":"textarea","placeholder":"Enter your description","rows":10,"show_label":false},{"name":"item_link","label":"Link","type":"url","condition":{"layout":"6"}},{"name":"btn_text","label":"Button Text 1","type":"text","label_block":true,"condition":{"layout":["2","4"]}},{"name":"btn_link","label":"Button Link 1","type":"url","condition":{"layout":["2","4"]}},{"name":"btn_type1","label":"Button Type 1","type":"select","options":{"btn-primary":"Primary","btn-secondary2":"Secondary"},"default":"btn-primary","condition":{"layout":"4"}},{"name":"btn_icon1","label":"Button Icon 1","type":"icons","fa4compatibility":"icon","condition":{"layout":"4"}},{"name":"btn_text2","label":"Button Text 2","type":"text","label_block":true,"condition":{"layout":"4"}},{"name":"btn_link2","label":"Button Link 2","type":"url","condition":{"layout":"4"}}]},{"name":"section_style","label":"Style","tab":"content","controls":[{"name":"style","label":"Style","type":"select","options":{"style1":"Style 1","style2":"Style 2","style3":"Style 3"},"default":"style1","condition":{"layout":"1"}},{"name":"title_color","label":"Title Color","type":"color","selectors":{"{{WRAPPER}} .ct-fancy-box .item--title":"color: {{VALUE}};"}},{"name":"title_typography","label":"Title Typography","type":"typography","control_type":"group","selector":"{{WRAPPER}} .ct-fancy-box .item--title"},{"name":"desc_color","label":"Description Color","type":"color","selectors":{"{{WRAPPER}} .ct-fancy-box .item--description":"color: {{VALUE}};"}},{"name":"desc_typography","label":"Description Typography","type":"typography","control_type":"group","selector":"{{WRAPPER}} .ct-fancy-box .item--description"},{"name":"icon_color","label":"Icon Color","type":"color","selectors":{"{{WRAPPER}} .ct-fancy-box .item--icon i":"color: {{VALUE}};"}}]},{"name":"section_animate","label":"Animate","tab":"content","controls":[{"name":"ct_animate","label":"Case Animate","type":"select","options":{"":"None","wow bounce":"bounce","wow flash":"flash","wow pulse":"pulse","wow rubberBand":"rubberBand","wow shake":"shake","wow swing":"swing","wow tada":"tada","wow wobble":"wobble","wow bounceIn":"bounceIn","wow bounceInDown":"bounceInDown","wow bounceInLeft":"bounceInLeft","wow bounceInRight":"bounceInRight","wow bounceInUp":"bounceInUp","wow bounceOut":"bounceOut","wow bounceOutDown":"bounceOutDown","wow bounceOutLeft":"bounceOutLeft","wow bounceOutRight":"bounceOutRight","wow bounceOutUp":"bounceOutUp","wow fadeIn":"fadeIn","wow fadeInDown":"fadeInDown","wow fadeInDownBig":"fadeInDownBig","wow fadeInLeft":"fadeInLeft","wow fadeInLeftBig":"fadeInLeftBig","wow fadeInRight":"fadeInRight","wow fadeInRightBig":"fadeInRightBig","wow fadeInUp":"fadeInUp","wow fadeInUpBig":"fadeInUpBig","wow fadeOut":"fadeOut","wow fadeOutDown":"fadeOutDown","wow fadeOutDownBig":"fadeOutDownBig","wow fadeOutLeft":"fadeOutLeft","wow fadeOutLeftBig":"fadeOutLeftBig","wow fadeOutRight":"fadeOutRight","wow fadeOutRightBig":"fadeOutRightBig","wow fadeOutUp":"fadeOutUp","wow fadeOutUpBig":"fadeOutUpBig","wow flip":"flip","wow flipInX":"flipInX","wow flipInY":"flipInY","wow flipOutX":"flipOutX","wow flipOutY":"flipOutY","wow lightSpeedIn":"lightSpeedIn","wow lightSpeedOut":"lightSpeedOut","wow rotateIn":"rotateIn","wow rotateInDownLeft":"rotateInDownLeft","wow rotateInDownRight":"rotateInDownRight","wow rotateInUpLeft":"rotateInUpLeft","wow rotateInUpRight":"rotateInUpRight","wow rotateOut":"rotateOut","wow rotateOutDownLeft":"rotateOutDownLeft","wow rotateOutDownRight":"rotateOutDownRight","wow rotateOutUpLeft":"rotateOutUpLeft","wow rotateOutUpRight":"rotateOutUpRight","wow hinge":"hinge","wow rollIn":"rollIn","wow rollOut":"rollOut","wow zoomIn":"zoomIn","wow zoomInDown":"zoomInDown","wow zoomInLeft":"zoomInLeft","wow zoomInRight":"zoomInRight","wow zoomInUp":"zoomInUp","wow zoomOut":"zoomOut","wow zoomOutDown":"zoomOutDown","wow zoomOutLeft":"zoomOutLeft","wow zoomOutRight":"zoomOutRight","wow zoomOutUp":"zoomOutUp"},"default":""},{"name":"ct_animate_delay","label":"Animate Delay","type":"text","default":"0","description":"Enter number. Default 0ms"}]}]}';
    protected $styles = array(  );
    protected $scripts = array(  );
}