/**
 * Cutom player JS
 * Author : Phuong.nm
 */
(function($){
		var customFP = {
			/* init selector */
			selector : {},
			init : function(){
				customFP.selector = {
					divVideo	: '.flowplayer',
					fpUI 		: '.fp-ui',
					fhdSubBt	: '.fhd-sub-button',
					fhdSub		: $('.fhd-sub'),
					fpVolum 	: $('.fp-volume'),
					quality 	: $('<div class="fhd-quality"></div>'),
					enViButton 	: $('<div class="fhd-en-vi-button">FULL</div>'),
					subOnOff 	: $('<div class="fhd-sub-button">CC</div>'),
					dialogBox 	: $('#dialog-box'),
					dialog 		: '#dialog-box',
					style1 		: {'width':'100%'},
					style2 		: {'width':'calc(100% - 200px)'}
				};
				var $obj = customFP.selector;

				customFP.loadCustom();
				$(document).on('click',$obj.fpUI,function(){
					$($obj.divVideo).css('background-image','');
					setTimeout(function(){
						$('a[href="http://flowplayer.org"]').hide();
					},100);
				});
				$(document).on('click',$obj.fhdSubBt,function(){
					$($obj.dialog).slideToggle(function(){
						$(this).is(':hidden') ? $obj.fhdSub.css($obj.style1) : $obj.fhdSub.css($obj.style2) ;
					});
				});
			},
			loadCustom : function(){
				var $obj = customFP.selector;

				$obj.fpVolum.after($obj.quality);
				$obj.fpVolum.after($obj.enViButton);
				$obj.fpVolum.after($obj.subOnOff);

				var dialogClone = $obj.dialogBox.clone();
				$obj.dialogBox.remove();
				$obj.subOnOff.after(dialogClone);
				dialogClone.css({
					'right'	 : '6px',
					'bottom' : '30px',
					'width'	 : '200px'
				});
			}
		};

		var controlEvent = {
			controlName : {
				subLang 		: '.fhd-sub-lang',
				subSize 		: '.fhd-sub-size',
				quility 		: '.fhd-quality',
				subP 			: '.fhd-sub > p',
				subTitle 		: '.fhd-sub',
				subActive 		: 'fp-active',
				langDefault 	: 'VI',
				subLangItem		: 'sub-lang',
				subActive 		: '.fhd-sub-active',
				classSubActive 	: 'fhd-sub-active',
				colorTrans  	: {'background-color' : ""},
				colorActive 	: {'background-color' : ""},
			},
			loadEvent : function(){
				var ctrName = controlEvent.controlName;
				controlEvent.loadSub(ctrName.langDefault);

				$(document).on('click',ctrName.subLang, function(){
					controlEvent.changeSub($(this));
				});
				$(document).on('click',ctrName.subSize, function(){
					controlEvent.changeSize($(this));
				});
				$(document).on('click',ctrName.quility, function(){
					$('.fp-fullscreen').click();
				});
			},
			changeSize : function($this){
				var ctrName = controlEvent.controlName;
				var fontSize = '20px';
				switch($this.attr('size')){
					case 'large':
						fontSize = '30px';
						break;
					case 'medium':
						fontSize = '20px';
						break;
					case 'minium':
						fontSize = '10px';
						break;
				}
				$('body').append('<style type="text/css">' + ctrName.subTitle + ' > p {font-size:' + fontSize +' !important;}</style>');
				$(ctrName.subSize).css('background-color','transparent');
				$this.css('background-color','#80ba42');
			},
			changeSub : function($this){
				var ctrName = controlEvent.controlName;
				$(ctrName.subLang + ':nth-child(n+1)').css('background-color','transparent');
				$this.css('background-color','#80ba42');
				$(ctrName.subTitle).removeClass(ctrName.classSubActive);
				controlEvent.loadSub($this.attr('lang'));
			},
			loadSub : function(lang){
				var ctrName = controlEvent.controlName;
				$(ctrName.subTitle).each(function(idx, ele){
					if($(ele).attr(ctrName.subLangItem) === lang ){
						$(ele).addClass(ctrName.classSubActive);
					}
				});
			}
		};
		
		jQuery(document).ready(function($){
			customFP.init();
			controlEvent.loadEvent();
		});
	})(jQuery);