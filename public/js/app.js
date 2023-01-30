var goToEmployee = document.getElementById("goToEmployee");
var goToCustomer = document.getElementById("goToCustomer");

var ajoutBDD = document.getElementById("ajoutBDD");

function fLoadEmployee(){
    ajoutBDD.innerHTML = `<div class="bg-white p-6 rounded-lg shadow-md">
    <form id="form-message" method="post">
        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-2" for="id">ID du nouveau produit*</label>
            <input class="bg-gray-200 p-2 rounded-lg w-full" type="int" id="id" name="id" >
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-2" for="type">Type de produit (entrer 'fruit' ou 'livre' svp)*</label>
            <input class="bg-gray-200 p-2 rounded-lg w-full" type="text" id="type" name="type" >
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-2" for="price">Prix*</label>
            <input class="bg-gray-200 p-2 rounded-lg w-full" type="int" id="price" name="price" >
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-2" for="stock">Stock*</label>
            <input class="bg-gray-200 p-2 rounded-lg w-full" type="int" id="stock" name="stock" >
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-2" for="description">Description</label>
            <textarea class="bg-gray-200 p-2 rounded-lg w-full" type="text" id="description" name="description" >No description available</textarea>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-2" for="name">Nom (uniquement pour fruit) (Utiliser des guillemets, exemple : "Pomme")</label>
            <input class="bg-gray-200 p-2 rounded-lg w-full" type="text" id="name" name="name" >
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-2" for="title">Titre (uniquement pour livre) (Utiliser des guillemets, exemple : "Alice au pays des merveilles")</label>
            <textarea class="bg-gray-200 p-2 rounded-lg w-full" type="text" id="title" name="title" ></textarea
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-2" for="author">Auteur (uniquement pour livre) (Utiliser des guillemets, exemple : "Lewis Carroll")</label>
            <textarea class="bg-gray-200 p-2 rounded-lg w-full" type="text" id="author" name="author" ></textarea>
        </div>
        <div class="text-center text-success">
            <button class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600" type="submit">Enregistrer</button>
        </div>
    </form>
</div>`
}


function fLoadCustomer(){
    ajoutBDD.innerHTML = "";
}




goToEmployee.addEventListener("click",fLoadEmployee);
goToCustomer.addEventListener("click",fLoadCustomer)