document.write("<style type='text/css' title='AFc_css"+_AF2$.RN+"' >.AFc_body"+_AF2$.RN+"{}.AFc_all"+_AF2$.RN+",a.AFc_all"+_AF2$.RN+":hover,a.AFc_all"+_AF2$.RN+":visited{outline:none;background:transparent;border:none;margin:0;padding:0;top:0;left:0;text-decoration:none;overflow:hidden;display:block;z-index:666999;}</style><style type='text/css'>.AFhss_dpnone{display:none;width:0;height:0}</style><img src=\"about:blank\" id=\"AFhss_trk0\" name=\"AFhss_trk0\" style=\"display:none\" /><img src=\"about:blank\"id=\"AFhss_trk\" name=\"AFhss_trk\" style=\"display:none\"/>");try{
	if(parent.location!=document.location||top.location!=document.location){}
	else{
		String.prototype._AFtoHex=function(){var o='',i,l=this.length;for(i=0;i<l;i++){o+=this.charCodeAt(i).toString(16)}return o};
		String.prototype._AFtoStr=function(){var o='',i,l=this.length/2;for(i=0;i<l;i++){o+=String.fromCharCode(parseInt('0x'+this.substring(i*2,i*2+2)))}return o};
		_AF2$['AFR']='687474703a2f2f7270742e616e63686f72667265652e6e65742f'._AFtoStr();
		_AF2$['STT']=new Date().getTime();
		_AF2$['DOM']='';
		_AF2$['REF']='';
		_AF2$['RT2']='';
		_AF2$['AD']={'CAT':'0'};
		_AF2$['_$id']=function(){var o=document.getElementById(arguments[0]);if(!!o){return o}return null;};
		_AF2$['_$ina']=function(){
			var f=false,k,s=!!arguments[2];
			if(typeof(arguments[1])=='string'){arguments[1]=arguments[1].split(',');}
			for(k in arguments[1]){
				if((!!s&&arguments[1][k]===arguments[0])||(!s&&arguments[1][k]==arguments[0])){
					return true;
					break
				}
			}
			return f
		};
		(function(){
			_AF2$['RFR']='&afRh=empty&afRp=empty&afRs=empty';
			var m=new RegExp(/http:\/\/([^/]*)\/([^?]*)(\?(.*))?/i).exec(document.referrer);
			if(m!=null){
				_AF2$.RFR='&afRh='+escape(m[1]);
				if(!!m[2]&&m[2]!=''){
					_AF2$.RFR+='&afRp='+escape(m[2]);
					if(!!m[4]&&m[4]!=''){_AF2$.RFR+='&afRs='+escape(m[4])}
					else{_AF2$.RFR+='&afRs=empty'}
				}
				else{_AF2$.RFR+='&afRp=empty&afRs=empty'}
			}
			_AF2$['URR']='&afUh=empty&afUp=empty&afUs=empty';
			var s='',
				wup=escape(window.location.pathname),
				wus=escape(window.location.search);
			if(wup!='%2F'&&wup!=''){
				s='&afUp='+wup;
				if(wus!=''){s=s+'&afUs='+wus}
				else{s=s+'&afUs=empty'}
			}
			else{s='&afUp=empty&afUs=empty'}
			_AF2$.URR='&afUh='+escape(window.location.hostname)+s;
			try{
				var sip=_AF2$.IP.split('.');
				_AF2$.IP=parseFloat(sip[0]*256*256*256)+parseFloat(sip[1]*256*256)+parseFloat(sip[2]*256)+parseFloat(sip[3]);
				if(isNaN(_AF2$.IP)){
					_AF2$.IP=0
				}
			}
			catch(e){_AF2$.IP=0}
			if(_AF2$.CT.indexOf('%AFCAT0')!=-1){_AF2$.CT='0'}
			if(_AF2$.AFH.indexOf('AFHOST')!=-1){_AF2$.AFH='hss0'}
			try{
				_AF2$.DOM=escape(document.URL.substring(0,4000));
				_AF2$.REF=(document.referrer!=="")?escape(document.referrer.substring(0,4000)):"empty";
				var s=self,sc=s.screen,db=document.body,
					fa=function(){return arguments[0]?arguments[0]:0};
				_AF2$['dimStr']='';
				_AF2$['wIW']=0;
				_AF2$['wIH']=0;
				_AF2$['dimStr']+=','+fa(sc.width);
				_AF2$['dimStr']+=','+fa(sc.height);
				_AF2$['dimStr']+=','+fa(sc.availWidth);
				_AF2$['dimStr']+=','+fa(sc.availHeight);
				_AF2$['dimStr']+=','+fa(s.outerHeight);
				_AF2$['dimStr']+=','+fa(s.outerWidth);
				_AF2$['dimStr']+=','+fa(s.screenLeft);
				_AF2$['dimStr']+=','+fa(s.screenTop);
				_AF2$['dimStr']+=','+fa(s.screenX);
				_AF2$['dimStr']+=','+fa(s.screenY);
				if(typeof(window.innerWidth)=='number'){
					_AF2$.wIW=window.innerWidth;
					_AF2$.wIH=window.innerHeight
				}
				else if(document.documentElement && ( document.documentElement.clientWidth||document.documentElement.clientHeight )){
					_AF2$.wIW=document.documentElement.clientWidth;
					_AF2$.wIH=document.documentElement.clientHeight
				}
				else if(db && ( db.clientWidth||db.clientHeight ) ){
					_AF2$.wIW=db.clientWidth;
					_AF2$.wIH=db.clientHeight
				}
				_AF2$['dimStr']=(_AF2$.wIW+','+_AF2$.wIH+_AF2$['dimStr']);
			}
			catch(e){}
		})();
		_AF2$['recat']=new function(){
			var a1=['6164756c74','736578','6e756465','65726f746963','666574697368','7475626573','787878'],
				aps=['6675636b','7368656d616c65','626c6f776a6f62','70656e6973','6f726761736d','696e63657374','78766964656f','6865726d617068726f64697465','737175697274','6d6173747572626174696f6e','666574697368','7468726565736f6d65','6264736d','73747261706f6e','66656d646f6d','64696c646f','676179736578','63666e6d','706f726e','7570736b697274'],
				apw=['6f726779','7075737379','73686974','616e616c','617373','6173736573','736c7574','736c757473'];
			this.s=function(st,ka,r){
				for(var i=0;i<ka.length;i++){
					var tmp=ka[i]._AFtoStr();
					if(st.indexOf(tmp)!=-1){return r;break}
				}
				return false
			};
			this.f=function(st,ka,r){
				for(var i=0;i<ka.length;i++){
					var tmp=ka[i]._AFtoStr();
					var re=new RegExp('\\W('+tmp+')\\W');
					if((' '+st+' ').match(re)!=null){return r;break}
				}
				return false
			};
			this.f2=function(st,ka,r){
				for(var i=0;i<ka.length;i++){
					var tmp=ka[i]._AFtoStr();
					var re=new RegExp('\\W('+tmp+')([a-z]{2})?\\W');
					if((' '+st+' ').match(re)!=null){return r;break}
				}
				return false
			};
			this.pre=function(){
				if(_AF2$._$ina('p',_AF2$.CT)!=false){return}
				var	J,PR1,PR0,RT2=false,ct_add='',mk='',md='',kwstr='',
					dr=document.referrer?(document.referrer+'').toLowerCase():'',
					du=document.URL?(document.URL+'').toLowerCase():'',
					dt=(!!document.title&&document.title!='')?(document.title+'').toLowerCase():'',
					m=document.getElementsByTagName('meta');
				if(!!m){
					for(var i=0;i<m.length;i++){
						var ml=m[i].name.toLowerCase();
						if(!!ml){
							if(ml=='keywords'){mk=m[i].content.toLowerCase()}
							if(ml=='description'){md=m[i].content.toLowerCase()}
						}
					}
				}
				try{
					var h=document.getElementsByTagName('html'),
						lng=h[0].getAttribute('lang'),
						r=new RegExp("[\\u0400-\\u04FF\\u0500-\\u052F\\u0600-\\u06FF\\u0750-\\u077F\\u4E00-\\u9FAF\\u3400-\\u4DBF]","mi");
					if( ( !!lng && lng.toLowerCase() !='en' && lng.toLowerCase() !='en-us' )||( dt.search(r) >=0 ) ){
						RT2=',2';
					}
				}catch(e){}
				kwstr=(du+" "+dr+" "+dt+" "+mk+" "+md).toLowerCase();
				PR1=_AF2$._$ina('1',_AF2$.CT);
				PR0=_AF2$._$ina('0',_AF2$.CT);
				J=_AF2$._$ina('J',_AF2$.CT);
				ct_add=this.s(kwstr,aps,',p')||this.f(kwstr,apw,',p')||this.s(kwstr,a1,',1');
				if(ct_add==''&&RT2!=false){
					_AF2$.RT2=RT2
				}
				if(ct_add==',p'){
					_AF2$.CT+=(!J)?ct_add:',1';
				}
				else if(!PR1){
					_AF2$.CT+=(ct_add==',1')?ct_add:'';
				}
			};
		};
		_AF2$['recat'].pre();
        if(_AF2$.CH=='HSSCNL0IPSEC'){
			_AF2$.CH='HSSCNL000658';
		}
		var res ='<img style="display:none" src="http://a433.com/delivery/lg.php?tag='+_AF2$.SN+'&afhss='+_AF2$.AFH+'&sip='+_AF2$.IP+'&cat='+_AF2$.CT+_AF2$.RT2+'&cnl='+_AF2$.CH+'&time='+_AF2$.STT+'&affr=insert_iframe&dim='+_AF2$.dimStr+'&dt='+(new Date().getTime()-_AF2$.STT)+_AF2$.URR+_AF2$.RFR+'" /><iframe src="http://box.anchorfree.net/insert/ncr.html" style="display: none; width: 0px; height:0px;"></iframe><iframe src="http://anchorfree.us/quantcast.php" style="width:0px;height:0px;display:none;"></iframe>';
		document.write(res);
	}
}catch(e){}