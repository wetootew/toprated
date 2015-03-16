

function loadVideo(id) {
	var helpVideo = { 
		'profilo' : 'xFlBZMiVMT0',
		'contatti' : 'a-J_e3bFH08'
	}
	$('#topbar').prepend('<div class="scheda oscuramento temp"><div class=xClose>X</div><iframe width="560" height="315" src="http://www.youtube.com/embed/' + helpVideo[id] + '?list=RDlh28ZAGkahk" frameborder="0" allowfullscreen></iframe></div>');
}

$( document ).ready(function() {
  $(".stillWithClick>li").on('click', function(event) {
	event.stopPropagation();
	if ($("#bacheca tr.scheda.oscuramento").length)
		$("#bacheca tr.scheda").removeClass('scheda oscuramento')	
	$(".stillWithClick>li").not($(this).parents()).removeClass('click');
    $(this).toggleClass("click");
  });
	
  $("body").click(function(event) {
	$(".stillWithClick>li").removeClass('click');
	$(".temp").remove();	
    $("#bacheca tr.scheda").removeClass('scheda oscuramento')	
  });

  $("#bacheca tr").on('click', function(event) {
	if(!$("#bacheca tr.scheda.oscuramento").length)
		$(this).addClass('scheda oscuramento');	
	if ($(this).is(".scheda") )
		event.stopPropagation();
  });

  sortabledir = 1;
  $(".sortable").each(function (i,e) {$(e).find('th').click(function() {
     var b = $(e).find('tbody')[0], l = b.rows.length, c = this.cellIndex, a = [], f, t;
     for (i = 0; i < l; i++) // .v makes comparisons faster
        a[i]={o: b.rows[i], v: isNaN(f = parseFloat((t = b.rows[i].cells[c].textContent).replace(/(\$|\,)/g,''))) ? t:f};
     a.sort(function(a,b) { return sortabledir * (a.v > b.v ? 1 : -1) });
     for (i = 0; i < l; i++) b.appendChild(a[i].o);
     sortabledir*=-1;
  })});		
	
	$(".tab .comandi li:not(:first-child):not(:last-child):not(.editable)").click(function(e) {
		gruppoFiltra($(this));
  });
	$(".tab .comandi .editable").each(function(){gruppoEditabile($(this))})

	$("#contatti .comandi li:first-child").click(function(e) {
		$(this).closest(".tab").find("tbody tr").show();
		$(this).closest(".tab").find(".comandi li").removeClass('active')
		$(this).toggleClass('active')
  });
		
	$("#contatti .comandi li:last-child").click(function(e) {
		var newgroup = $('<li class=editable contenteditable=true>Nuovo</li>');
		gruppoEditabile(newgroup);
		newgroup.insertBefore($(this));
  });

	function gruppoFiltra(g) {
		g.closest(".tab").find("tbody tr").hide();		
		g.closest(".tab").find("tbody ." + g.html().toLowerCase()).show();
		g.closest(".tab").find(".comandi li").removeClass('active')
		g.toggleClass('active')
  }
	
	function gruppoEditabile(g) {
	  g.keypress(function(e) {if(e.keyCode==13) g.blur()});
		g.click(function(e) {gruppoFiltra(g)});
		g.blur(function(e) { 
		 if (g.html() == '<br>' || g.html() == '') 
		  g.html(g.attr('name'));  		 
		 g.attr('contenteditable','false')
		});
		g.dblclick(function(e) { 
		 g.attr('contenteditable','true');
		 g.attr('name', g.html());
		 g.focus(); window.getSelection().setPosition(0)
		});
	}
	
	$(".scheda:not(.chiudi)").each(function(e) {
		$(this).append('<li class=help onclick="loadVideo(\'' + $(this).attr('id') +'\')">?</li>')
  });
		
	$(".scheda.chiudi").each(function(e) {
		$(this).append('<div class=xClose>X</div>')
  });
	
	
		
	$("#gruppi img[name=ricerca]").click(function(e) {
		if (!$('#gruppi .comandi li:contains("Ricerca")').length)
			$("#gruppi .comandi").append("<li>Ricerca</li>")
			
		$('#gruppi .comandi li:contains("Ricerca")').click()
  });
	
	$("#gruppi img[name=creagruppoass]").click(function(e) {
		if (!$('#gruppi .comandi li:contains("Gruppo")').length) 
			$("#gruppi .comandi").append("<li>Gruppo</li>")
			
		$('#gruppi .comandi li:contains("Gruppo")').click()
  });
	
	$("#gruppi img[name=Registraassociazione]").click(function(e) {
		if (!$('#gruppi .comandi li:contains("Associazione")').length) 
			$("#gruppi .comandi").append("<li>Associazione</li>")
			
		$('#gruppi .comandi li:contains("Associazione")').click()
		});
	
		
	$("#gruppi .comandi").on('click',"li", function(event) {
		gruppoFiltra($(this));		
  });

	
	
	//$(".tab .comandi li:first-child").click();	
	
	$(".tab .comandi li:first-child").each(function(e) {$(this).click() });
  
	$("#topbar").click();
	
	
	$(".bottoni img[name]")
		.mousedown(function(event) {this.src = "Bottoni/"+this.name+"click.png"})
		.mouseout(function(event) {this.src = "Bottoni/"+this.name+"stat.png"})
		.mouseover(function(event) {this.src = "Bottoni/"+this.name+"over.png"})
		.mouseup(function(event) {this.src = "Bottoni/"+this.name+"over.png"})
	  //.attr("src", "Bottoni/"+$(this).name+"stat.png")
		
	/*$( ".slider-range" ).after(document.createElement('div').slider({
		range: true, min: 0, max: 5, values: [ 0, 5],
    slide: function( event, ui ) {
      $( ui.prev() ).val(ui.values[ 0 ] + " - " + ui.values[ 1 ] );
    }
  }));<!-- funzionalità da implementare -->*/ 

$('.scheda').on("mousedown",".dati li", function(event){$(this).attr('contenteditable','true');});
$('.scheda').on("keyup", ".nome", function(event) {
	var $tr = $(this).closest("tr");
	if ($tr.hasClass("associazione") || $tr.hasClass("gruppo")) {
		var $trClone = $tr.clone(true);
		$trClone.hide();
		$tr.parent().append($trClone)
	}
	$tr.attr( "class", $(this).html() )
	$tr.closest(".tab").find(".active").html($(this).html()); 
});	
});
