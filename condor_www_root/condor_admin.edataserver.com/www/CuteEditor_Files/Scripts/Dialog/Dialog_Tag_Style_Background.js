var OxO35d4=["SetStyle","length","","GetStyle","GetText",":",";","cssText","inp_color","inp_color_Preview","tb_image","btnbrowse","sel_bgrepeat","sel_bgattach","sel_hor","tb_hor","sel_hor_unit","sel_ver","tb_ver","sel_ver_unit","outer","div_demo","onclick","value","disabled","selectedIndex","style","backgroundImage","backgroundColor","backgroundRepeat","backgroundAttachment","backgroundPositionX","options","backgroundPositionY","url(",")","background-image","backgroundPosition","none"]; function pause(Ox39d){var Ox319= new Date();var Ox39e=Ox319.getTime()+Ox39d;while(true){ Ox319= new Date() ;if(Ox319.getTime()>Ox39e){return ;} ;} ;}  ; function StyleClass(Ox117){var Ox3a0=[];var Ox3a1={};if(Ox117){ Ox3a6() ;} ; this[OxO35d4[0x0]]=function SetStyle(name,Oxad,Ox3a3){ name=name.toLowerCase() ;for(var i=0x0;i<Ox3a0[OxO35d4[0x1]];i++){if(Ox3a0[i]==name){break ;} ;} ; Ox3a0[i]=name ; Ox3a1[name]=Oxad?(Oxad+(Ox3a3||OxO35d4[0x2])):OxO35d4[0x2] ;}  ; this[OxO35d4[0x3]]=function GetStyle(name){ name=name.toLowerCase() ;return Ox3a1[name]||OxO35d4[0x2];}  ; this[OxO35d4[0x4]]=function Ox3a5(){var Ox117=OxO35d4[0x2];for(var i=0x0;i<Ox3a0[OxO35d4[0x1]];i++){var Ox91=Ox3a0[i];var p=Ox3a1[Ox91];if(p){ Ox117+=Ox91+OxO35d4[0x5]+p+OxO35d4[0x6] ;} ;} ;return Ox117;}  ; function Ox3a6(){var arr=Ox117.split(OxO35d4[0x6]);for(var i=0x0;i<arr[OxO35d4[0x1]];i++){var p=arr[i].split(OxO35d4[0x5]);var Ox91=p[0x0].replace(/^\s+/g,OxO35d4[0x2]).replace(/\s+$/g,OxO35d4[0x2]).toLowerCase(); Ox3a0[Ox3a0[OxO35d4[0x1]]]=Ox91 ; Ox3a1[Ox91]=p[0x1] ;} ;}  ;}  ; function GetStyle(Oxc4,name){return  new StyleClass(Oxc4.cssText).GetStyle(name);}  ; function SetStyle(Oxc4,name,Oxad,Ox3a7){var Ox3a8= new StyleClass(Oxc4.cssText); Ox3a8.SetStyle(name,Oxad,Ox3a7) ; Oxc4[OxO35d4[0x7]]=Ox3a8.GetText() ;}  ; function ParseFloatToString(Oxe){var Ox3aa=parseFloat(Oxe);if(isNaN(Ox3aa)){return OxO35d4[0x2];} ;return Ox3aa+OxO35d4[0x2];}  ;var inp_color=Window_GetElement(window,OxO35d4[0x8],true);var inp_color_Preview=Window_GetElement(window,OxO35d4[0x9],true);var tb_image=Window_GetElement(window,OxO35d4[0xa],true);var btnbrowse=Window_GetElement(window,OxO35d4[0xb],true);var sel_bgrepeat=Window_GetElement(window,OxO35d4[0xc],true);var sel_bgattach=Window_GetElement(window,OxO35d4[0xd],true);var sel_hor=Window_GetElement(window,OxO35d4[0xe],true);var tb_hor=Window_GetElement(window,OxO35d4[0xf],true);var sel_hor_unit=Window_GetElement(window,OxO35d4[0x10],true);var sel_ver=Window_GetElement(window,OxO35d4[0x11],true);var tb_ver=Window_GetElement(window,OxO35d4[0x12],true);var sel_ver_unit=Window_GetElement(window,OxO35d4[0x13],true);var outer=Window_GetElement(window,OxO35d4[0x14],true);var div_demo=Window_GetElement(window,OxO35d4[0x15],true); btnbrowse[OxO35d4[0x16]]=function btnbrowse_onclick(){ function Ox27c(Oxca){if(Oxca){ tb_image[OxO35d4[0x17]]=Oxca ;} ;}  ; editor.SetNextDialogWindow(window) ;if(Browser_IsSafari()){ editor.ShowSelectImageDialog(Ox27c,tb_image.value,tb_image) ;} else { editor.ShowSelectImageDialog(Ox27c,tb_image.value) ;} ;}  ; UpdateState=function UpdateState_Background(){ tb_hor[OxO35d4[0x18]]=sel_hor_unit[OxO35d4[0x18]]=(sel_hor[OxO35d4[0x19]]>0x0) ; tb_ver[OxO35d4[0x18]]=sel_ver_unit[OxO35d4[0x18]]=(sel_ver[OxO35d4[0x19]]>0x0) ; div_demo[OxO35d4[0x1a]][OxO35d4[0x7]]=element[OxO35d4[0x1a]][OxO35d4[0x7]] ;}  ; SyncToView=function SyncToView_Background(){ tb_image[OxO35d4[0x17]]=element[OxO35d4[0x1a]][OxO35d4[0x1b]] ; FixTbImage() ; inp_color[OxO35d4[0x17]]=element[OxO35d4[0x1a]][OxO35d4[0x1c]] ; inp_color[OxO35d4[0x1a]][OxO35d4[0x1c]]=element[OxO35d4[0x1a]][OxO35d4[0x1c]] ; inp_color_Preview[OxO35d4[0x1a]][OxO35d4[0x1c]]=element[OxO35d4[0x1a]][OxO35d4[0x1c]] ; sel_bgrepeat[OxO35d4[0x17]]=element[OxO35d4[0x1a]][OxO35d4[0x1d]] ; sel_bgattach[OxO35d4[0x17]]=element[OxO35d4[0x1a]][OxO35d4[0x1e]] ; sel_hor[OxO35d4[0x17]]=element[OxO35d4[0x1a]][OxO35d4[0x1f]] ; sel_hor_unit[OxO35d4[0x19]]=0x0 ;if(sel_hor[OxO35d4[0x19]]==-0x1){if(ParseFloatToString(element[OxO35d4[0x1a]].backgroundPositionX)){ tb_hor[OxO35d4[0x17]]=ParseFloatToString(element[OxO35d4[0x1a]].backgroundPositionX) ;for(var i=0x0;i<sel_hor_unit[OxO35d4[0x20]][OxO35d4[0x1]];i++){var Oxce=sel_hor_unit[OxO35d4[0x20]][i][OxO35d4[0x17]];if(Oxce&&element[OxO35d4[0x1a]][OxO35d4[0x1f]].indexOf(Oxce)!=-0x1){ sel_hor_unit[OxO35d4[0x19]]=i ;break ;} ;} ;} ;} ; sel_ver[OxO35d4[0x17]]=element[OxO35d4[0x1a]][OxO35d4[0x21]] ; sel_ver_unit[OxO35d4[0x19]]=0x0 ;if(sel_ver[OxO35d4[0x19]]==-0x1){if(ParseFloatToString(element[OxO35d4[0x1a]].backgroundPositionY)){ tb_ver[OxO35d4[0x17]]=ParseFloatToString(element[OxO35d4[0x1a]].backgroundPositionY) ;for(var i=0x0;i<sel_ver_unit[OxO35d4[0x20]][OxO35d4[0x1]];i++){var Oxce=sel_ver_unit[OxO35d4[0x20]][i][OxO35d4[0x17]];if(Oxce&&element[OxO35d4[0x1a]][OxO35d4[0x21]].indexOf(Oxce)!=-0x1){ sel_ver_unit[OxO35d4[0x19]]=i ;break ;} ;} ;} ;} ;}  ; SyncTo=function SyncTo_Background(element){if(tb_image[OxO35d4[0x17]]){ element[OxO35d4[0x1a]][OxO35d4[0x1b]]=OxO35d4[0x22]+tb_image[OxO35d4[0x17]]+OxO35d4[0x23] ;} else { SetStyle(element.style,OxO35d4[0x24],OxO35d4[0x2]) ;} ;try{ element[OxO35d4[0x1a]][OxO35d4[0x1c]]=inp_color[OxO35d4[0x17]]||OxO35d4[0x2] ;} catch(x){ element[OxO35d4[0x1a]][OxO35d4[0x1c]]=OxO35d4[0x2] ;} ; element[OxO35d4[0x1a]][OxO35d4[0x1d]]=sel_bgrepeat[OxO35d4[0x17]]||OxO35d4[0x2] ; element[OxO35d4[0x1a]][OxO35d4[0x1e]]=sel_bgattach[OxO35d4[0x17]]||OxO35d4[0x2] ; element[OxO35d4[0x1a]][OxO35d4[0x25]]=OxO35d4[0x2] ;if(sel_hor[OxO35d4[0x19]]>0x0){ element[OxO35d4[0x1a]][OxO35d4[0x1f]]=sel_hor[OxO35d4[0x17]] ;} else {if(ParseFloatToString(tb_hor.value)){ element[OxO35d4[0x1a]][OxO35d4[0x1f]]=ParseFloatToString(tb_hor.value)+sel_hor_unit[OxO35d4[0x17]] ;} else { element[OxO35d4[0x1a]][OxO35d4[0x1f]]=OxO35d4[0x2] ;} ;} ;if(sel_ver[OxO35d4[0x19]]>0x0){ element[OxO35d4[0x1a]][OxO35d4[0x21]]=sel_ver[OxO35d4[0x17]] ;} else {if(ParseFloatToString(tb_ver.value)){ element[OxO35d4[0x1a]][OxO35d4[0x21]]=ParseFloatToString(tb_ver.value)+sel_ver_unit[OxO35d4[0x17]] ;} else { element[OxO35d4[0x1a]][OxO35d4[0x21]]=OxO35d4[0x2] ;} ;} ;}  ; function FixTbImage(){var Oxce=tb_image[OxO35d4[0x17]].replace(/^(\s+)/g,OxO35d4[0x2]).replace(/(\s+)$/g,OxO35d4[0x2]);if(Oxce.substr(0x0,0x4).toLowerCase()==OxO35d4[0x22]){ Oxce=Oxce.substr(0x4,Oxce[OxO35d4[0x1]]-0x4) ;} ;if(Oxce.substr(Oxce[OxO35d4[0x1]]-0x1,0x1)==OxO35d4[0x23]){ Oxce=Oxce.substr(0x0,Oxce[OxO35d4[0x1]]-0x1) ;} ;if(Oxce==OxO35d4[0x26]){ Oxce=OxO35d4[0x2] ;} ; tb_image[OxO35d4[0x17]]=Oxce ;}  ; inp_color[OxO35d4[0x16]]=inp_color_Preview[OxO35d4[0x16]]=function inp_color_onclick(){ SelectColor(inp_color,inp_color_Preview) ;}  ;