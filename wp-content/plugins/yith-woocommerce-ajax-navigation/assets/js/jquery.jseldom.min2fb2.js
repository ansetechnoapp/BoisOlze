!function(r){function e(e,t){var a=[],s=[];a=simpleselector.test(e)?[{tag:e}]:function(e){var t,a,s={sel:"",val:[]},i=[],l=!1,n="",p="",o=e.length;for(a=0;a<o;a++)if(p=e.charAt(a),l)"\\"===p&&a+1<o?n+=e.charAt(++a):t===p?(t=void 0,n+=p):"'"!==p&&'"'!==p||void 0!==t?"]"===p&&void 0===t?(s.val.push(n),n="",l=!1):"]"===p&&void 0===t||(void 0===t&&","===p?(s.val.push(n),n=""):n+=p):(t=p,n+=p);else if("\\"===p&&a+1<o)l&&(n+=e.charAt(++a));else if("["===p&&void 0===t)l=!0;else if(" "===p||"+"===p||"<"===p){if(" "===p){for(;" "===p&&a<o;a++)p=e.charAt(a);a<o&&(--a,p=e.charAt(a))}if(i.push(s),"+"===p||"<"===p){for(i.push({sel:p,val:""});a<o&&" "===(p=e.charAt(++a)););a<o&&(p=e.charAt(--a))}s={sel:"",val:[]}}else" "!==p&&"]"!==p&&(s.sel+=p);0==s.sel.length&&0==s.val.length||i.push(s);var c=i.length;for(a=0;a<c;a++){var h=i[a].sel,v={};if("+"===h||"<"===h)v.tag=h;else{v.tag=tagexpr.exec(h),v.id=idexpr.exec(h),v.id&&r.isArray(v.id)&&(v.id=v.id[0].substr(1)),v.tag||(v.tag="div"),v.vars=[];for(var u=[],f=0;f<i[a].val.length;f++){var g=i[a].val[f].indexOf("="),d=i[a].val[f].substr(0,g).trim(),m=i[a].val[f].substr(g+1);m=m.replace(rTrimmer,""),"text"===d?v.text=m:"class"===d&&m.trim().length?u.push(m):v.vars.push([d,m])}var y=h.match(classexpr);if(y){for(f=0;f<y.length;f++)u.push(y[f].substr(1));v.className=u.join(" ")}}i[a]=v}return i}(e),void 0===t&&(t=1);var i=r(),l=[],n=[],p=document.createElement("div"),o=0,c=0,h=0,v=a.length;for(c=0;c<v;c++){if("+"==a[c].tag||"<"===a[c].tag)l=n.slice(),--o;else{for(h=0;h<t;h++)if("input"==a[c].tag){var u=[];if(u.push("<"+a[c].tag),a[c].id&&u.push("id='"+a[c].id+"'"),a[c].className||a[c].vars&&"class"in a[c].vars){var f=[];a[c].className&&f.push(a[c].className),a[c].vals.class&&f.push(a[c].vars.class),u.push("class='"+f.join(" ")),u.push("'")}if(a[c].vars)for(var g=0;g<a[c].vars.length;g++)u.push(a[c].vars[g][0]+"='"+a[c].vars[g][1]+"'");a[c].text&&u.push("value='"+a[c].text+"'"),u.push("/>"),n[h]=l[h],l[h]?(l[h].innerHTML=l[h].innerHTML+u.join(" "),l[h]=l[h].lastChild):(p.innerHTML=u.join(" "),l[h]=p.removeChild(p.firstChild))}else{var d=document.createElement(a[c].tag);if(a[c].vars)for(g=0;g<a[c].vars.length;g++)d.setAttribute(a[c].vars[g][0],a[c].vars[g][1]);a[c].id&&(d.id=a[c].id),a[c].className&&(d.className=a[c].className),a[c].text&&d.appendChild(document.createTextNode(a[c].text)),n[h]=l[h],l[h]?l[h]=l[h].appendChild(d):l[h]=d}o++||Array.prototype.push.apply(i,l)}Array.prototype.push.apply(s,l)}return i}function t(t,a,s){for(var i=t.match(/{[^}]*}/g)||[],l=r(),n=0;n<a.length;n++){for(var p=t,o=0;o<i.length;o++){var c,h=i[o].substr(1,i[o].length-2).split("."),v=a[n][h[0]];if(""===h[0].trim())v=a[n].toString();else for(var u=1;u<h.length;u++){if(c=v,!(v=v[h[u]])){v="";break}"function"==typeof v&&(v=v.call(c))}r.isArray(v)&&(v=v.join(",")),"string"==typeof v?v=v.replace(/\\['"\\]|['"]/g,(function(r){return"\\"+r})):"function"==typeof v&&(v=v.call(c)),v=v||"",p=p.replace(i[o],v)}Array.prototype.push.apply(l,e(p,s))}return l}expr=/[.#\w].([\S]*)/g,classexpr=/(\.)([^.#[]+)/g,idexpr=/(#)[^.#[]+/,tagexpr=/^[\w]+/,varexpr=/(\w+?)=(['"])([^\2$]*?)\2/,simpleselector=/^[\w]+$/,rTrimmer=/^[\s]*[\"\']?|[\"\']?[\s]*$/g,rSpaceTrim=/^[\s]+|[\s]+$/g,String.prototype.trim||(String.prototype.trim=function(){return this.replace(rSpaceTrim,"")});var a=Array.isArray||function(r){return"[object Array]"===toString.call(r)};r.jseldom=function(s){return 2==arguments.length&&r.isPlainObject(arguments[1])?t.apply(this,[arguments[0],[arguments[1]]]):1==arguments.length||2==arguments.length&&!a(arguments[1])?e.apply(this,arguments):2==arguments.length?t.apply(this,arguments):void 0},r.jseldomf=function(r){var e=[r,[Array.prototype.slice.call(arguments,1)]];return t.apply(this,e)}}(jQuery);