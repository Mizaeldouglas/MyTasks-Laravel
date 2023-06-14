<x-layout name-btn="Criar Tarefa">


    <section class="graph">
        <div class="graph_header">
            <h2>Progresso do Dia</h2>
            <div class="graph_header-line"></div>
            <div class="graph_header-date">
                <img src="/assets/images/icon-prev.png" alt="">
                13 de Dez
                <img src="/assets/images/icon-next.png" alt="">
            </div>
        </div>
        <div class="graph_header-subtitle">
            Tarefas: <b>3/6</b>
        </div>
        <div class="graph_placeholder">
        </div>
        <div class="tasks_left_footer">
            <img src="/assets/images/icon-info.png" alt="">
            Falta 3 tarefas para serem realizada!

        </div>
    </section>
    <section class="list">
        <div class="list_header">
            <select class="list_header-select">
                <option value="1">todas as tarefas</option>
            </select>
        </div>
        <div class="tasks_list">
            @php
                $tasks = [
                    [
                        'id' => 1,
                        'done' =>false,
                        'title' => 'Minha Primeira Task',
                        'category' => 'Categoria 1',
                        'delete_url' => '#',
                        'edit_url' => '#',
                    ],
                    [
                        'id' => 2,
                        'done' =>true,
                        'title' => 'Minha Segunda Task',
                        'category' => 'Categoria 2',
                        'delete_url' => '#',
                        'edit_url' => '#',
                    ],
                    [
                        'id' => 3,
                        'done' =>false,
                        'title' => 'Minha Terceira Task',
                        'category' => 'Categoria 1',
                        'delete_url' => '#',
                        'edit_url' => '#',
                    ]
];
             @endphp


            <x-task :data=$tasks[0] />
            <x-task :data=$tasks[1] />
            <x-task :data=$tasks[2] />

        </div>
    </section>
</x-layout>
