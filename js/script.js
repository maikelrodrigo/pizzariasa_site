 $( document ).ready(function() {
 
	var nrIngredientes = $('.ingrediente').length;
   
   $( "#addInput" ).click(function(e) {

		//impedir o submit
		e.preventDefault();
		
		nrIngredientes+=1;
		var divIng = document.createElement("div");
		divIng.className = "ingrediente";
		divIng.id = "ing"+nrIngredientes;
		
		//propriedades do novo select
		var selectIng = document.createElement("select");
		
		selectIng.id = "s"+nrIngredientes;
		selectIng.className = "sIngredientes";
		selectIng.name = "ingred[]";
		
		var btnRemoveIng = document.createElement("p");
		btnRemoveIng.id = "sIng"+nrIngredientes;
		btnRemoveIng.className = "btnRemoveIng";
		btnRemoveIng.appendChild(document.createTextNode("×"));
		var dataId = document.createAttribute("data-id");
		dataId.value = nrIngredientes;
		
		btnRemoveIng.setAttributeNode(dataId);
		

		//propriedades do novo input (quantidade)
		var quantidadeIng = document.createElement("input");
		quantidadeIng.id = "iIng"+nrIngredientes;
		
		//CLASSE DO INPUT
		quantidadeIng.className = "qntInput";
		quantidadeIng.name = "quantidadeIng[]";
		//customizar placeholder
		quantidadeIng.placeholder = "Quantidade";
		quantidadeIng.value = "1";
		quantidadeIng.type = "number";
		
		//adicionar select novo na div de ingredientes
		
		divIng.appendChild(selectIng);
		divIng.appendChild(btnRemoveIng);
		divIng.appendChild(quantidadeIng);
		$("#ingredientes").append(divIng);
		
		//pegar value do primeiro select
		var values = $("#s1>option").map(function() { return $(this).val(); }).get();
		//pegar texto do primeiro select
		var text = $("#s1>option").map(function() { return $(this).text(); }).get();

		//botar no select as opções
		for (var i = 0; i < values.length; i++) {
			var option = document.createElement("option");
			option.value = values[i];
			option.text = text[i];
			option.className = "form-control";
			selectIng.appendChild(option);
		}

	});
	
	$(document).on("click", ".btnRemoveIng", function(){
		removeIng($(this).data("id"));
	});
	
 });
 
function removeIng(id){
	$("#ing"+id).remove();
}