
<x-layout>
<x-slot:btn>
    <x-button  href="{{route('task.create')}}" >Criar tarefa</x-button>
</x-slot:btn>
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
            @foreach($tasks as $task)
            <x-task :data=$task/>
            @endforeach




        </div>
    </section>
</x-layout>
