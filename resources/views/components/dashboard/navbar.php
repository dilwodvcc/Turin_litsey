<aside class="bg-white w-64 min-h-screen flex flex-col shadow-lg transform -translate-x-full md:translate-x-0 transition-transform duration-150 ease-in fixed md:static z-30" id="sidebar">
    <div class="p-4 border-b flex items-center justify-between">
        <a href="/"><h2 class="text-2xl font-bold text-yellow-800">Quiz App</h2></a>
        <div>
            <button class="md:hidden text-gray-600" onclick="document.getElementById('sidebar').classList.toggle('-translate-x-full')">
                <i class="fas fa-close text-xl"></i>
            </button>
        </div>
    </div>
    <nav class="flex-grow p-4" id="sideBar">

    </nav>
</aside>
<script >
    let sideBareItem =
        [
            {
                name: "Dashboard",
                uri: "/dashboard",
                icon: "fas fa-home mr-2"
            },

            {
                name: "My Quizzes",
                uri: "/my-quizzes",
                icon: "fas fa-book mr-2"
            },

            {
                name: "Create Quiz",
                uri: "/create-quiz",
                icon: "fas fa-plus mr-2"
            },

            {
                name: "Statistics",
                uri: "/statistics",
                icon: "fas fa-chart-bar mr-2"
            },

            {
                name: "Take Quiz",
                uri: "/take-quiz",
                icon: "fas fa-pen mr-2"
            }
        ]
    let sideBar = document.getElementById("sideBar");
    sideBareItem.forEach((item) => {
        let isActive = window.location.pathname === item.uri ? 'bg-gray-200 text-yellow-800' : 'hover:bg-gray-200'; ;
        sideBar.innerHTML += `<a href="${item.uri}" class="block p-3 mb-2 text-gray-800 ${isActive} rounded-lg">
            <i class="${item.icon}"></i> ${item.name}
        </a>`;
    })
</script>