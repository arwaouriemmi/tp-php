node=document.querySelector("#i");
no=document.querySelector("form");
noo=document.querySelector("button");
node.addEventListener("input",()=>{
    for(var i=0;i<node.value;i++){
    nenode = document.createElement("div");
    element = `type du sandwitch numero ${i}:` ;
    nenode.innerText=element ;
    no.insertBefore(nenode,noo) ;
    newnode = document.createElement("select");
    newnode.name="type du sandwitch"+ i;
    newnodee = document.createElement("option");
    newnodee.innerText="viande" ;
    newnode.appendChild(newnodee);
    newnodeee = document.createElement("option");
    newnodeee.innerText="poulet" ;
    newnode.appendChild(newnodeee);
    newnodeeee = document.createElement("option");
    newnodeeee.innerText="escalope" ;
    newnode.appendChild(newnodeeee);
    no.insertBefore(newnode,noo) ;
    nenode1 = document.createElement("div");
    element1 = `ingrédients à ajouter pour le sandwitch numero ${i}:` ;
    nenode1.innerText=element1 ;
    no.insertBefore(nenode1,noo) ;
    newnodee1 = document.createElement("input");
    newnodee1.type="checkbox" ;
    newnodee1.name="harissa"+ i ;
    newnodee1.value="harissa" ;
    ne = document.createElement("label");
    ne.for="harissa" ;
    ne.innerText="harissa" ;
    no.insertBefore(newnodee1,noo) ;
    no.insertBefore(ne,noo) ;
    newnodee2 = document.createElement("input");
    newnodee2.type="checkbox" ;
newnodee2.name="salade"+ i ;
newnodee2.value="salade" ;
ne2 = document.createElement("label");
ne2.for="salade" ;
ne2.innerText="salade" ;
no.insertBefore(newnodee2,noo) ;
no.insertBefore(ne2,noo) ;
newnodee3= document.createElement("input");
newnodee3.type="checkbox" ;
newnodee3.name="mayo"+ i ;
newnodee3.value="mayo" ;
ne3 = document.createElement("label");
ne3.for="mayo" ;
ne3.innerText="mayo" ;
no.insertBefore(newnodee3,noo) ;
no.insertBefore(ne3,noo) ;

 

   
}

});