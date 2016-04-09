<!doctype html>
<html lang="en" data-framework="backbonejs">
    <head>
        <meta charset="utf-8">
        <title>Backbone.js • TodoMVC</title>
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <link rel="stylesheet" href="{{ asset('css/todomvc-app-css/index.css') }}">
    </head>
    <body>
        <section class="todoapp">
            <header class="header">
                <h1>todos</h1>
                <input class="new-todo" placeholder="What needs to be done?" autofocus>
            </header>
            <section class="main">
                <input class="toggle-all" id="toggle-all" type="checkbox">
                <label for="toggle-all">Mark all as complete</label>
                <ul class="todo-list"></ul>
            </section>
            <footer class="footer"></footer>
        </section>
        <footer class="info">
            <p>Double-click to edit a todo</p>
            <p>Written by <a href="https://github.com/addyosmani">Addy Osmani</a></p>
            <p>Part of <a href="http://todomvc.com">TodoMVC</a></p>
        </footer>
        <script type="text/template" id="item-template">
            <div class="view">
                <input class="toggle" type="checkbox" <%= completed ? 'checked' : '' %>>
                <label><%- title %></label>
                <button class="destroy"></button>
            </div>
            <input class="edit" value="<%- title %>">
        </script>
        <script type="text/template" id="stats-template">
            <span class="todo-count"><strong><%= remaining %></strong> <%= remaining === 1 ? 'item' : 'items' %> left</span>
            <ul class="filters">
                <li>
                    <a class="selected" href="#/">All</a>
                </li>
                <li>
                    <a href="#/active">Active</a>
                </li>
                <li>
                    <a href="#/completed">Completed</a>
                </li>
            </ul>
            <% if (completed) { %>
            <button class="clear-completed">Clear completed</button>
            <% } %>
        </script>
        {{--<script src="node_modules/todomvc-common/base.js"></script>--}}

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/backbone.js/1.3.3/backbone.js"></script>

        <script src="{{ asset('js/libs/backbone.localStorage.js') }}"></script>

        <script src="{{ asset('js/models/todo.js') }}"></script>
        <script src="{{ asset('js/collections/todos.js') }}"></script>
        <script src="{{ asset('js/views/todo-view.js') }}"></script>
        <script src="{{ asset('js/views/app-view.js') }}"></script>
        <script src="{{ asset('js/routers/router.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>