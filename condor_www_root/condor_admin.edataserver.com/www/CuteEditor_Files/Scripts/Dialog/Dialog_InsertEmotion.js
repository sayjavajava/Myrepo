var OxO2b5b=[""," ","=\x22","\x22","src","^[a-z]*:[/][/][^/]*","Edit","\x3CIMG border=\x220\x22 align=\x22absmiddle\x22 src=\x22","\x22 src_cetemp=\x22","\x22\x3E","ImageTable","IMG","length","className","dialogButton","CuteEditor_ColorPicker_ButtonOver(this)","onmouseover","insert(this)","onclick"];var editor=Window_GetDialogArguments(window); function attr(name,Oxad){if(!Oxad||Oxad==OxO2b5b[0x0]){return OxO2b5b[0x0];} ;return OxO2b5b[0x1]+name+OxO2b5b[0x2]+Oxad+OxO2b5b[0x3];}  ; function insert(img){if(img){var src=img[OxO2b5b[0x4]]; src=src.replace( new RegExp(OxO2b5b[0x5],OxO2b5b[0x0]),OxO2b5b[0x0]) ;var Ox259=OxO2b5b[0x0];if(editor.GetActiveTab()==OxO2b5b[0x6]){ Ox259=OxO2b5b[0x7]+src+OxO2b5b[0x8]+src+OxO2b5b[0x9] ;} else { Ox259=OxO2b5b[0x7]+src+OxO2b5b[0x9] ;} ; editor.PasteHTML(Ox259) ; Window_CloseDialog(window) ;} ;}  ; function do_Close(){ Window_CloseDialog(window) ;}  ;var ImageTable=Window_GetElement(window,OxO2b5b[0xa],true);var images=ImageTable.getElementsByTagName(OxO2b5b[0xb]);var len=images[OxO2b5b[0xc]];for(var i=0x0;i<len;i++){var img=images[i]; img[OxO2b5b[0xd]]=OxO2b5b[0xe] ; img[OxO2b5b[0x10]]= new Function(OxO2b5b[0xf]) ; img[OxO2b5b[0x12]]= new Function(OxO2b5b[0x11]) ;} ;