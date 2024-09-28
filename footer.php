<footer class="footer" id="footer">
    <div class="container">
        <div class="footer_wrap">
            <div class="footer_top">
                <div class="footer_links">
                    <a href="templates.php" class="footer_link">
                        Фирменные стили
                    </a>
                    <a href="#" class="footer_link" id="web-pages-bottom">
                        Web-сайты
                    </a>
                    <!-- <a href="stamps.php" class="footer_link">
                        Печати
                    </a> -->
                    <a href="seo.php" class="footer_link">
                        Seo
                    </a>
                    <div class="footer_socials">
                        <a href="#" class="footer_link footer_icons">
                            <img src="img/telegram-icon.svg" alt="telegram">
                        </a>
                        <a href="#" class="footer_link">
                            <img src="img/whatsapp-icon.svg" alt="whatsapp">
                        </a>
                    </div>
                </div>
            </div>
            <div class="footer_bottom">
                <div class="footer_links">
                    <a href="#" class="footer_link">
                        Управление файлами cookie
                    </a>
                    <a href="#" class="footer_link">
                        Политика конфиденциальности
                    </a>
                    <a href="#" class="footer_link">
                        Договор оферты
                    </a>
                </div>
                <div class="footer_credits">
                    2023© StartFish
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="cursor-dot"></div>
<div class="cursor-dot-outline"></div>
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="js/main.js?<?= md5(time()); ?>"></script>
<script src="js/dotCursor.js?<?= md5(time()); ?>"></script>

<script type="module">
    // Select category

    let services = [{
            id: 1,
            name: 'Отрасль 1',
            selected: true
        },
        {
            id: 2,
            name: 'Отрасль 2',
            selected: false
        },
        {
            id: 3,
            name: 'Отрасль 3',
            selected: false
        },
    ];
    let branches = [{
            id: 1,
            name: 'транспорт и логистика',
            selected: false
        },
        {
            id: 2,
            name: 'гастрономия',
            selected: false
        },
        {
            id: 3,
            name: 'event и развлечения',
            selected: false
        },
        {
            id: 4,
            name: 'образование',
            selected: false
        },
        {
            id: 5,
            name: 'Красота и здоровье',
            selected: false
        },
        {
            id: 6,
            name: 'Строительство и недвижимость',
            selected: false
        },
        {
            id: 7,
            name: 'IT',
            selected: false
        },
        {
            id: 8,
            name: 'финансы и аналитика',
            selected: false
        },
        {
            id: 9,
            name: 'другое',
            selected: false
        }
    ]
    const templates = [{
            "id": 1,
            "name": "001",
            "categories": [1, 6, 7, 8, 9],
            "preview": "001-preview.png",
            "full": "001-full.png"
        },
        {
            "id": 2,
            "name": "002",
            "categories": [5],
            "preview": "002-preview.png",
            "full": "002-full.png"
        },
        {
            "id": 3,
            "name": "003",
            "categories": [5],
            "preview": "003-preview.png",
            "full": "003-full.png"
        },
        {
            "id": 4,
            "name": "004",
            "categories": [5, 3, 9],
            "preview": "004-preview.png",
            "full": "004-full.png"
        },
        {
            "id": 5,
            "name": "005",
            "categories": [5, 3, 9],
            "preview": "005-preview.png",
            "full": "005-full.png"
        },
        {
            "id": 6,
            "name": "006",
            "categories": [1, 6, 9],
            "preview": "006-preview.png",
            "full": "006-full.png"
        },
        {
            "id": 7,
            "name": "007",
            "categories": [5, 3],
            "preview": "007-preview.png",
            "full": "007-full.png"
        },
        {
            "id": 8,
            "name": "008",
            "categories": [5],
            "preview": "008-preview.png",
            "full": "008-full.png"
        },
        {
            "id": 9,
            "name": "009",
            "categories": [2],
            "preview": "009-preview.png",
            "full": "009-full.png"
        },
        {
            "id": 10,
            "name": "010",
            "categories": [5],
            "preview": "010-preview.png",
            "full": "010-full.png"
        },
        {
            "id": 11,
            "name": "011",
            "categories": [5],
            "preview": "011-preview.png",
            "full": "011-full.png"
        },
        {
            "id": 12,
            "name": "012",
            "categories": [5],
            "preview": "012-preview.png",
            "full": "012-full.png"
        },
        {
            "id": 13,
            "name": "013",
            "categories": [4, 9],
            "preview": "013-preview.png",
            "full": "013-full.png"
        },
        {
            "id": 14,
            "name": "014",
            "categories": [4, 3, 7, 8, 9],
            "preview": "014-preview.png",
            "full": "014-full.png"
        },
        {
            "id": 15,
            "name": "015",
            "categories": [4, 3, 8, 9],
            "preview": "015-preview.png",
            "full": "015-full.png"
        },
        {
            "id": 16,
            "name": "016",
            "categories": [1, 6, 9],
            "preview": "016-preview.png",
            "full": "016-full.png"
        },
        {
            "id": 17,
            "name": "017",
            "categories": [3, 4, 7, 9],
            "preview": "017-preview.png",
            "full": "017-full.png"
        },
        {
            "id": 18,
            "name": "018",
            "categories": [3, 4],
            "preview": "018-preview.png",
            "full": "018-full.png"
        },
        {
            "id": 19,
            "name": "019",
            "categories": [2],
            "preview": "019-preview.png",
            "full": "019-full.png"
        },
        {
            "id": 20,
            "name": "020",
            "categories": [4, 7, 9],
            "preview": "020-preview.png",
            "full": "020-full.png"
        },
        {
            "id": 21,
            "name": "021",
            "categories": [1, 5, 8, 9],
            "preview": "021-preview.png",
            "full": "021-full.png"
        },
        {
            "id": 22,
            "name": "022",
            "categories": [5],
            "preview": "022-preview.png",
            "full": "022-full.png"
        },
        {
            "id": 23,
            "name": "023",
            "categories": [2],
            "preview": "023-preview.png",
            "full": "023-full.png"
        },
        {
            "id": 24,
            "name": "024",
            "categories": [1, 5, 9],
            "preview": "024-preview.png",
            "full": "024-full.png"
        },
        {
            "id": 25,
            "name": "025",
            "categories": [5, 3, 9],
            "preview": "025-preview.png",
            "full": "025-full.png"
        },
        {
            "id": 26,
            "name": "026",
            "categories": [5, 3, 9],
            "preview": "026-preview.png",
            "full": "026-full.png"
        },
        {
            "id": 27,
            "name": "027",
            "categories": [3, 4, 8, 9],
            "preview": "027-preview.png",
            "full": "027-full.png"
        },
        {
            "id": 28,
            "name": "028",
            "categories": [3, 4, 7, 9],
            "preview": "028-preview.png",
            "full": "028-full.png"
        },
        {
            "id": 29,
            "name": "029",
            "categories": [8, 7, 9],
            "preview": "029-preview.png",
            "full": "029-full.png"
        },
        {
            "id": 30,
            "name": "030",
            "categories": [4, 5, 9],
            "preview": "030-preview.png",
            "full": "030-full.png"
        },
        {
            "id": 31,
            "name": "031",
            "categories": [7, 8, 9],
            "preview": "031-preview.png",
            "full": "031-full.png"
        },
        {
            "id": 32,
            "name": "032",
            "categories": [2],
            "preview": "032-preview.png",
            "full": "032-full.png"
        }
    ]

    const templatesWrap = document.querySelector('.templates_wrap')
    const templatesAllBtn = document.querySelector('#templates-all')
    let filteredTemplates = templates
    let showAll = false

    showTemplates();

    function showTemplates() {
        if (templatesWrap) {
            let currentTemplates = filteredTemplates
            if (!showAll) {
                currentTemplates = filteredTemplates.slice(0, 4)
            }
            templatesWrap.innerHTML = ''
            currentTemplates.forEach(item => {
                templatesWrap.innerHTML +=
                    `<a href="template.php?id=${item.id}" class="templates_item">
                    <div>
                        <img src="img/templates/${item.preview}" alt="">
                    </div>
                </a>`
            })

            templatesAllBtn.addEventListener('click', () => {
                templatesWrap.innerHTML = ''
                filteredTemplates.forEach(item => {
                    templatesWrap.innerHTML +=
                        `<a href="template.php?id=${item.id}" class="templates_item">
                        <div>
                            <img src="img/templates/${item.preview}" alt="">
                        </div>
                    </a>`
                })
                showAll = true
                templatesAllBtn.classList.add('d-none')
            })
        }
    }

    const categoriesWrap = document.querySelector('.templates_categories')

    setCategories(branches)

    const sortBtns = document.querySelectorAll('.sort-btn')
    const clearBtn = document.querySelector('.clear-btn')

    if (sortBtns) {
        sortBtns.forEach((btn, index) => {

            btn.addEventListener('click', (item) => {

                if (btn.classList.contains('active')) {
                    btn.classList.remove('active')
                    setCategories([])
                } else {

                    // if (btn.dataset.name === 'branches') {
                    //     setCategories(branches)
                    //     btn.classList.add('active')
                    // } else if (btn.dataset.name === 'services') {
                    //     setCategories(services)
                    //     btn.classList.add('active')
                    // }  
                    if (btn.dataset.name === 'clear') {
                        btn.classList.add('hidden')
                        branches.forEach((category) => {
                            category.selected = false
                        })
                        services.forEach((category) => {
                            category.selected = false
                        })
                        sortBtns.forEach(x => {
                            x.classList.remove('active')
                        })
                        setCategories(branches)
                        filteredTemplates = templates
                        showTemplates()
                    }
                }
            })
        })
    }

    function setCategories(array) {
        if (categoriesWrap) {
            categoriesWrap.innerHTML = ''
            array.forEach(item => {
                let div = document.createElement('div')
                const divText = document.createTextNode(item.name)
                div.classList.add('templates_category')
                if (item.selected) {
                    div.classList.add('active')
                }
                div.appendChild(divText)
                div.dataset.id = item.id

                div.addEventListener('click', (e) => {
                    div.classList.toggle('active')
                    item.selected = !item.selected

                    if (array.filter(x => x.selected).length > 0) {
                        clearBtn.classList.remove('hidden')
                    } else {
                        clearBtn.classList.add('hidden')
                    }
                    const selectedIds = array.filter(x => x.selected).map(x => x.id)
                    filterTemplates(selectedIds)

                })
                categoriesWrap.appendChild(div)
            })
        }
    }

    function filterTemplates(categories) {
        filteredTemplates = []
        templates.forEach(template => {
            let isContains = true
            categories.forEach(category => {
                const templateCategory = template.categories.find(x => x === category)

                if (!templateCategory) {
                    isContains = false
                }
            })

            if (isContains) {
                filteredTemplates.push(template)
            }
        })

        showTemplates();
    }
</script>
</body>

</html>