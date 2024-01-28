const product_list = [
    {
        name: "PINI KAY Buchenholzbriketts Premium 960kg",
        price: "849,00",
        image: "Buchenholzbriketts-PINI-KAY-Premium-960kg-2-300x300.jpg",
        id: "2337",
    },
    {
        name: "RUF Buchenholzbriketts 960kg",
        price: "729,00",
        image: "RUF-Buchenholzbriketts-960kg-2-300x300.jpg",
        id: "2355",
    },
    {
        name: "GERMAN FLAMES Holzpellets 6mm ENplusA1, 990kg Palette",
        price: "549,00",
        image: "GERMAN-FLAMES-Holzpellets-6mm-ENplusA1-990kg-Palette-2-300x300.jpg",
        id: "3103",
    },
    {
        name: "HEIZFUXX Holzpellets Grey 6mm ENplusA1, 65 x 15kg Palette",
        price: "699,00",
        image: "HEIZFUXX-Holzpellets-Grey-6mm-ENplusA1-65-x-15kg-Palette-2-300x300.jpg",
        id: "3163",
    },
    {
        name: "Brennholz Buche 25 cm 2 RM",
        price: "419,00",
        image: "Brennholz-Buche-25-cm-2-Raummeter-Palette-2-300x300.jpg",
        id: "2442",
    },
    {
        name: "REKORD Braunkohlebriketts als Palette Folie (90 x 10 kg)",
        price: "499,00",
        image: "REKORD-Braunkohlebriketts-als-Palette-Folie-90-x-10-kg-12-300x300.jpg",
        id: "2297",
    },
    {
        name: "EPH Holzpellets im Papiersack, ENplusA1, 65 x 15kg Palette",
        price: "379,99",
        image: "EPH-Holzpellets-im-Papiersack-ENplusA1-65-x-15kg-Palette-2-300x300.jpg",
        id: "3132",
    },
    {
        name: "Brennholz Buche 25 cm 1 RM",
        price: "259,00",
        image: "Brennholz-Buche-20-25-cm-1-Raummeter-Palette-2-300x300.jpg",
        id: "2433",
    },
];
const get_product_list = product_list.map((product) => ({
    name: product.name,
    price: product.price,
    image: product.image,
    id: product.id,
}));

// récupération de l'élément div qui va contenir les valeurs
const container = document.getElementById("names-and-prices");

// parcours de la liste de noms et prix
for (const item of get_product_list) {
    // création d'un élément HTML pour chaque valeur
    const displaylist = `
  <li id="selectinfo" style="padding: 2px; margin:2px;border: 5px solid beige;"
  name="${item.name}" price="${item.price}"
  >${item.name} <br><br> ${item.price} <br><br> ${item.image} <br><br> ${item.id} </li>
    `;
    container.insertAdjacentHTML("afterbegin", displaylist);
}

// Function pour rappelle les erreurs lier a la gestion d"evenement comme : addEventListener
function G_AEL() {
    console.log(
        "soit votre script est injecter avant l'element que vous essayer de selectionner ou soit vous n'avez pas pris le bon sélécteur"
    );
    alert(
        "soit votre script est injecter avant l'element que vous essayer de selectionner ou soit vous n'avez pas pris le bon sélécteur"
    );
}
// récupération du formulaire d'ajout de tâche
const addTodoForm = document.getElementById("add-todo-form");

if (addTodoForm) {
    // gestionnaire d'événement qui va être appelé lorsque le formulaire est soumis
    addTodoForm.addEventListener("submit", (event) => {
        // empêche l'envoi du formulaire
        event.preventDefault();

        // récupération de la valeur saisie dans le formulaire
        const todoInput = document.getElementById("todo-input");
        const task = todoInput.value;

        // vérification que la tâche n'est pas vide
        if (task.trim()) {
            // ajout de la tâche au localStorage
            addTask(task);
            // réinitialisation du formulaire
            todoInput.value = "";
        }
    });
} else {
    G_AEL();
}

// récupération de l'élément HTML qui va contenir la liste de tâches
const todoList = document.getElementById("todo-list");

// fonction qui ajoute une tâche au localStorage et met à jour l'affichage de la liste
function addTask(task) {
    // récupération des tâches existantes
    let tasks = getTasks();
    // ajout de la nouvelle tâche
    tasks.push(task);
    // mise à jour du localStorage
    localStorage.setItem("tasks", JSON.stringify(tasks));
    // mise à jour de l'affichage de la liste
    updateTodoList();
}

// fonction qui récupère les tâches stockées dans le localStorage
function getTasks() {
    // récupération des tâches sous forme de chaîne de caractères
    const tasksString = localStorage.getItem("tasks");
    // transformation de la chaîne de caractères en tableau
    let tasks = [];
    if (tasksString) {
        tasks = JSON.parse(tasksString);
    }
    return tasks;
}

// fonction qui met à jour l'affichage de la liste de tâches en parcourant le tableau de tâches et en créant des éléments HTML pour chaque tâche
function updateTodoList() {
    // récupération du nombre de tâches
    const taskCount = getTaskCount();
    // mise à jour de l'affichage du nombre de tâches
    document.getElementById(
        "task-count"
    ).textContent = `Il y a ${taskCount} tâches dans le localStorage.`;

    // on récupère les tâches
    const tasks = getTasks();
    // on vide la liste de tâches
    todoList.innerHTML = "";
    // on parcours le tableau de tâches
    for (let i = 0; i < tasks.length; i++) {
        // on crée un élément HTML de liste pour chaque tâche
        const li = document.createElement("li");
        // on crée un champ de texte pour chaque tâche
        const taskInput = document.createElement("input");
        taskInput.type = "text";
        taskInput.value = tasks[i];
        // on ajoute un gestionnaire d'événement qui met à jour la tâche lorsque le champ de texte est modifié
        taskInput.addEventListener("change", (event) => {
            // mise à jour de la tâche lorsque le champ de texte est modifié
            updateTask(i, event.target.value);
        });
        // on ajoute le champ de texte à l'élément de liste
        li.appendChild(taskInput);
        // on crée un bouton de suppression pour chaque tâche
        const deleteButton = document.createElement("button");
        deleteButton.textContent = "Supprimer";
        deleteButton.addEventListener("click", () => {
            // suppression de la tâche lorsque le bouton est cliqué
            deleteTask(i);
        });
        // on ajoute le bouton de suppression à l'élément de liste
        li.appendChild(deleteButton);
        // on ajoute l'élément de liste à la liste de tâches
        todoList.appendChild(li);
    }
}

// fonction qui permet de mettre à jour une tâche existante
function updateTask(index, newTask) {
    // vérification que la tâche n'est pas vide
    if (newTask.trim()) {
        // récupération des tâches existantes
        let tasks = getTasks();
        // mise à jour de la tâche
        tasks[index] = newTask;
        // mise à jour du localStorage
        localStorage.setItem("tasks", JSON.stringify(tasks));
        // mise à jour de l'affichage de la liste
        updateTodoList();
    }
}

// fonction qui permet de supprimer une tâche
function deleteTask(index) {
    // récupération des tâches existantes
    let tasks = getTasks();
    // suppression de la tâche
    tasks.splice(index, 1);
    // mise à jour du localStorage
    localStorage.setItem("tasks", JSON.stringify(tasks));
    // mise à jour de l'affichage de la liste
    updateTodoList();
}

// fonction qui permet de récupérer une tâche
function getTask(index) {
    // récupération des tâches existantes
    const tasks = getTasks();
    // retour de la tâche
    return tasks[index];
}

// fonction qui retourne le nombre de tâches stockées dans le localStorage
function getTaskCount() {
    // récupération des tâches
    const tasks = getTasks();
    // retour du nombre de tâches
    return tasks.length;
}

// fonction qui supprime toutes les tâches stockées dans le localStorage
function clearTasks() {
    // suppression des tâches du localStorage
    localStorage.removeItem("tasks");
    // mise à jour de l'affichage de la liste
    updateTodoList();
}

// récupération du bouton de suppression de toutes les tâches
const clearButton = document.getElementById("clear-button");
if (clearButton) {
    // ajout d'un gestionnaire d'événement qui appelle la fonction clearTasks lorsque le bouton est cliqué
    clearButton.addEventListener("click", clearTasks);
} else {
    G_AEL();
}
window.addEventListener("DOMContentLoaded", () => {
    updateTodoList();
});

const listContainer = document.getElementById("insert-list");
let listHTML = "";

for (const product of product_list) {
    listHTML += `
      <div>
        <img src="${product.image}" alt="${product.name}">
        <h4>${product.name}</h4>
        <p>${product.price}</p>
      </div>
    `;
}

listContainer.innerHTML = listHTML;
