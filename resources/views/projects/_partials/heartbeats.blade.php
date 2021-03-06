<div class="box">
    <div class="box-header">
        <div class="pull-right">
            <button type="button" class="btn btn-default" title="{{ Lang::get('heartbeats.create') }}" data-toggle="modal" data-backdrop="static" data-target="#heartbeat"><span class="fa fa-plus"></span> {{ Lang::get('heartbeats.create') }}</button>
        </div>
        <h3 class="box-title">{{ Lang::get('heartbeats.label') }}</h3>
    </div>

    <div class="box-body" id="no_heartbeats">
        <p>{{ Lang::get('heartbeats.none') }}</p>
    </div>

    <div class="box-body table-responsive" id="heartbeat_list">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>{{ Lang::get('heartbeats.name') }}</th>
                    <th>{{ Lang::get('heartbeats.url') }}</th>
                    <th>{{ Lang::get('heartbeats.interval') }}</th>
                    <th>{{ Lang::get('heartbeats.last_check_in') }}</th>
                    <th>{{ Lang::get('heartbeats.status') }}</th>
                    <th>&nbsp;</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>
</div>

@push('templates')
    <script type="text/template" id="heartbeat-template">
        <td><%- name %></td>
        <td><%- callback_url %></td>
        <td><%- interval_label %></td>
        <td>
            <% if (has_run) { %>
                <%- formatted_date %>
            <% } else { %>
                {{ Lang::get('app.never') }}
            <% } %>
        </td>
        <td>
             <span class="label label-<%- status_css %>"><i class="fa fa-<%-icon_css %>"></i> <%- status %></span>
        </td>
        <td>
            <div class="btn-group pull-right">
                <button type="button" class="btn btn-default btn-edit" title="{{ Lang::get('heartbeats.edit') }}" data-toggle="modal" data-backdrop="static" data-target="#heartbeat"><i class="fa fa-edit"></i></button>
            </div>
        </td>
    </script>
@endpush
