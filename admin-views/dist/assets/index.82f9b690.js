import{A as y,R as h,Q as j,r as _,C as O,z as T,x as g,V as z,y as A,a3 as E,N as R}from"./index.7abcfecb.js";function $(e){var a=e.style,r=e.width,s=r===void 0?"60%":r,n=e.rows,i=n===void 0?3:n,c=e.className,t=e.prefixCls,f=y(t+"-text",c),l=[];function u(d){if(j(s))return s[d];if(i-1===d)return s}for(var m=0;m<i;m++)l.push(h.createElement("li",{className:t+"-text-row",key:m,style:{width:u(m)}}));return h.createElement("ul",{className:f,style:a},l)}function q(e){var a,r=e.style,s=e.shape,n=s===void 0?"square":s,i=e.size,c=e.position,t=c===void 0?"left":c,f=e.className,l=e.prefixCls,u=y(l+"-image",(a={},a[l+"-image-"+t]=t,a[l+"-image-"+n]=n,a[l+"-image-"+i]=i,a),f);return h.createElement("div",{className:u,style:r})}var v=globalThis&&globalThis.__assign||function(){return v=Object.assign||function(e){for(var a,r=1,s=arguments.length;r<s;r++){a=arguments[r];for(var n in a)Object.prototype.hasOwnProperty.call(a,n)&&(e[n]=a[n])}return e},v.apply(this,arguments)};function p(e){return R(e)?e:{}}var D={text:!0,loading:!0};function F(e,a){var r,s=_.exports.useContext(O),n=s.getPrefixCls,i=s.componentConfig,c=s.rtl,t=T(e,D,i==null?void 0:i.Skeleton),f=t.style,l=t.className,u=t.animation,m=t.loading,d=t.image,C=t.text,k=t.children,x=p(d),w=p(C),o=n("skeleton"),P=y(o,(r={},r[o+"-animate"]=u,r[o+"-rtl"]=c,r),l);function N(){return d&&g("div",{className:o+"-header",children:g(q,{...v({prefixCls:o},x)})})}function S(){return C&&g("div",{className:o+"-content",children:g($,{...v({prefixCls:o},w)})})}return g(z,{children:m?A("div",{...v({},E(t),{className:P,style:f,ref:a}),children:[x.position!=="right"&&N(),S(),x.position==="right"&&N()]}):k})}var b=_.exports.forwardRef(F);b.displayName="Skeleton";var M=b;export{M as S};