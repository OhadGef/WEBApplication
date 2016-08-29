



function createButton(kind){
	
	var length;
	
	$.ajax({
	url: 'data/category.json',
	dataType: 'json',
	type: 'get',
	cache: false,
	success: function(data){
		if(kind == 4){
			$(data.vegtables).each(function(index, value){
				var addBox = new addB(value.name);
			});
		}
		
		if(kind == 5){
			$(data.fruits).each(function(index, value){
				var addBox = new addB(value.name);
			});
		}
	}
	
});
	
	
	 var content = document.getElementById("modal-b");
	 
     while (content.hasChildNodes()){
    	content.removeChild(content.lastChild);
	}

	var category = kind;
		
	var title = document.getElementById("modal-title");
	
	switch(category){
		case 1:
			title.innerHTML = "Meat";
			break;
		case 2:
			title.innerHTML = "Chicken";
			break;
		case 3:
			title.innerHTML = "Fish";
			break;
		case 4:
			title.innerHTML = "Vegtables";
			break;
		case 5:
			title.innerHTML = "Fruits";
			break;
		case 6:
			title.innerHTML = "Bread";
			break;
		case 7:
			title.innerHTML = "Sauce";
			break;
		case 8:
			title.innerHTML = "Spice";
			break;
		case 9:
			title.innerHTML = "Bean";
			break;
	}
}

var sumIngre = 0;
var count = document.createElement("P");
count.id = "ingreCount";



function addB(name){
	this.name = name;
									
	document.getElementById("mobileNav").appendChild(count);		
	var but = document.createElement("BUTTON");
	but.id = "ingredient";
	but.innerHTML = this.name;
	
	var pressed = 0;
		
	but.addEventListener("click", function(){
		
		if(pressed % 2 == 0){
			count.innerHTML= " ";
			sumIngre++;
			count.innerHTML = sumIngre;
			but.style.border = "5px solid #7A7A7A";	
			var para = document.createElement("P");
    		var list = document.getElementById("list");
    		para.innerHTML = but.innerHTML;
    		list.appendChild(para);
			pressed++;
		}
		else{
			count.innerHTML= " ";
			sumIngre--;
			count.innerHTML = sumIngre;
			but.style.border = "2px solid #AAAAAA";	
			var list = document.getElementById("list");
			var remove = list.childNodes;
			for(var x=1; x < remove.length;x++){
				if(remove[x].innerHTML == but.innerHTML)
					list.removeChild(list.childNodes[x]);
			}
			pressed++;
		}
    	
	});
	
	document.getElementById("modal-b").appendChild(but);
	
}


function changepic(num){
	var starNum = num;
	console.log(starNum);
	var pic = document.getElementsByClassName("star");
	console.log(pic[starNum-1].getAttribute("src"));
	if(pic[starNum-1].getAttribute("src") == 'images/empty.png'){
		pic[starNum-1].setAttribute("src", "images/full.png");
	}
	else{
		pic[starNum-1].setAttribute("src", "images/empty.png");
	}
}


 var number =1;

function add_step(){
	
	   
    var steps = document.getElementById('sec-right').getElementsByClassName("add-steps");
		console.log(steps);
		switch(number){
			case 1:
				console.log("case1");
				steps[0].style.display = 'block';
				break;
			case 2:
				console.log("case2");
				steps[1].style.display = 'block';
				break;
			case 3:
				console.log("case3");
				steps[2].style.display = 'block';
				break;
			case 4:
				console.log("case4");
				steps[3].style.display = 'block';
				break;
			default:
				console.log("default");
	}
	number++;
}

			