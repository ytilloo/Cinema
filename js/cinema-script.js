var vids_list_arr=new Array();
//var vid_main=document.getElementById("vid_main");

var i=0;

function showVid(){
	//alert(i+vids_list_arr[i]);
		 
vid_main.src="vids/top10/"+vids_list_arr[i];

document.getElementById("name1").innerHTML=vids_list_arr[i];
}


function nextVid(){
if(i<vids_list_arr.length-1) {i++;}else{i=0;}
showVid();

}

function prevVid(){
if(i>0) {i--;}else{i=vids_list_arr.length-1;}
showVid();
}
         
