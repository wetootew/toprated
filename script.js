function sortable(){}
sortable.dir=1;
sortable.init=function(z){
  var c=z.getElementsByTagName('th');
  for(x=0;x<c.length;x++)
    c[x].onclick=new Function('sortable.work(this)');	
}
sortable.work=function(h){
  b=(t=h.parentNode.parentNode.parentNode).getElementsByTagName('tbody')[0];
  l=b.rows.length;
  a=[];
  for(i=0;i<l;i++) { // .v makes comparisons faster
    a[i]={}; a[i].v = (a[i].o = b.rows[i]).cells[h.cellIndex].textContent;
    if(!isNaN(f = parseFloat(a[i].v.replace(/(\$|\,)/g,'')))) a[i].v = f;
  }
  a.sort(sortable.compare);
  for(i=0;i<l;i++) b.appendChild(a[i].o);
  refresh(t);
  sortable.dir*=-1;
}
sortable.compare=function(f,c) { return sortable.dir * (f.v > c.v ? 1 : -1) }

function init() { //da rivedere
    var els = document.getElementsByTagName("table");
    re = new RegExp('\\b' + 'sortable' + '\\b');
    for(var i = 0, j = els.length; i < j; i++)
        if (re.test(els[i].className))
            sortable.init(els[i]);
}

function addEvents(event,func) {
  var old = event;
  if (typeof old != 'function')
    event = func;
  else
    event = function() {
      if (old)
        old();
      func();
    }
    return event;
}
window.onload=addEvents(window.onload,init);

