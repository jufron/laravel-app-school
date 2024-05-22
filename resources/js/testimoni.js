
const testimoni = () => {

    const button_info = document.querySelectorAll('#button_info');

    button_info.forEach(info => {
        info.addEventListener('click', function () {
            const dataUrl = info.getAttribute('data-url');
            getData(dataUrl);
            renderLoading(true);
        });
    });
};

const getData = (dataUrl) => {
    fetch(dataUrl)
        .then(ress => ress.json())
        .then(data => {
            renderLoading(false);
            renderHTML(data);
        })
        .catch(err => {
            console.error(err);
        });
};

const renderHTML = (result) => {
    const modalContainerInfo = document.querySelector('#modal-info-container');
    const element = `
        <div class="w-20 h-20 bg-gray-200 bg-slate-200 dark:bg-slate-800 mt-4 rounded-md flex items-center justify-center">
            ${renderHtmlWhenImageExcist(result.data.image)}  
        </div>

        <dl class="divide-y divide-slate-300 dark:divide-slate-800">
            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                <dt class="text-sm font-medium leading-6 text-gray-900">Nama Lengkap</dt>
                <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">${result.data.name}</dd>
            </div>
            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                <dt class="text-sm font-medium leading-6 text-gray-900">About</dt>
                <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">${result.data.message}</dd>
            </div>
            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                <dt class="text-sm font-medium leading-6 text-gray-900">Tanggal Buat</dt>
                <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">${result.data.created_at}</dd>
            </div>
            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                <dt class="text-sm font-medium leading-6 text-gray-900">Tanggal Perbaharui</dt>
                <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">${result.data.updated_at}</dd>
            </div>
        </dl>
    `;
    modalContainerInfo.innerHTML = element;
};

const renderHtmlWhenImageExcist = image => {
    if (image !== null) {
        return `<img src="${image}" alt="Uploaded Image" class="object-cover w-full h-full rounded-md overflow-hidden">`;
    } else {
        return `<div class="w-full h-full bg-slate-100 dark:bg-slate-800 flex justify-center items-center text-xs rounded-md">No Image</div>`;
    }
};

const renderLoading = (data) => {
    const modalContainerInfo = document.querySelector('#modal-info-container');

    if (data) {
        const element = `
            <div class="w-30 h-40 bg-slate-300 dark:bg-slate-800 animate-pulse mt-4 rounded-md flex items-center justify-center"></div>

            <dl class="divide-y divide-slate-300 dark:divide-slate-800 animate-pulse">
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <dt class="text-sm font-medium leading-6 text-slate-300 dark:bg-slate-800">
                        <div class="h-4 bg-slate-300 dark:bg-slate-800 rounded w-1/4 md:w-30"></div>
                    </dt>
                    <dd class="mt-1 text-sm leading-6 text-slate-300 dark:bg-slate-800 sm:col-span-2 sm:mt-0">
                        <div class="h-4 bg-slate-300 dark:bg-slate-800 rounded sm:30 w-50"></div>
                    </dd>
                </div>
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <dt class="text-sm font-medium leading-6 text-slate-300 dark:bg-slate-800">
                        <div class="h-4 bg-slate-300 dark:bg-slate-800 rounded w-1/4 md:w-30"></div>
                    </dt>
                    <dd class="mt-1 text-sm leading-6 text-slate-300 dark:bg-slate-800 sm:col-span-2 sm:mt-0">
                        <div class="h-4 bg-slate-300 dark:bg-slate-800 rounded sm:60 w-60"></div>
                    </dd>
                </div>
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <dt class="text-sm font-medium leading-6 text-slate-300 dark:bg-slate-800">
                        <div class="h-4 bg-slate-300 dark:bg-slate-800 rounded w-1/4 md:w-30"></div>
                    </dt>
                    <dd class="mt-1 text-sm leading-6 text-slate-300 dark:bg-slate-800 sm:col-span-2 sm:mt-0">
                        <div class="h-4 bg-slate-300 dark:bg-slate-800 rounded w-full"></div>
                    </dd>
                </div>
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <dt class="text-sm font-medium leading-6 text-slate-300 dark:bg-slate-800">
                        <div class="h-4 bg-slate-300 dark:bg-slate-800 rounded w-40 md:w-30"></div>
                    </dt>
                    <dd class="mt-1 text-sm leading-6 text-slate-300 dark:bg-slate-800 sm:col-span-2 sm:mt-0">
                        <div class="h-4 bg-slate-300 dark:bg-slate-800 rounded w-full"></div>
                    </dd>
                </div>
            </dl>
        `;
        modalContainerInfo.innerHTML = element;
    } else {
        modalContainerInfo.innerHTML = '';
    }
};


export default testimoni;
