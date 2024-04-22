@php use App\Helpers\PermissionsHelper; @endphp
<div style="height: 400px; overflow-y: auto;">
    <table id="server_players" class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th width="20">Name</th>
            <th>Frags</th>
            <th>Time</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($players as $player)
            <tr id="{{ $player['Name'] }}">
                <td>{{ $loop->iteration }}</td>
                <td>{{ $player['Name'] }}</td>
                <td>{{ $player['Frags'] }}</td>
                <td>{{ $player['TimeF'] }}</td>
                <td>
                    <!-- Icon for kick action -->
                    @if(PermissionsHelper::hasKickPermission())
                        <a title="kick" href="#" class="action-icon player" data-action="kick" data-server-id="{{$server->id}}" data-player-name="{{ $player['Name'] }}"><i class="fas fa-user-times"></i></a>
                    @endif
                    @if(PermissionsHelper::hasMutePermission())
                    <!-- Icon for mute action -->
                        <a title="mute" href="#" class="action-icon player" data-action="mute" data-server-id="{{$server->id}}" data-player-name="{{ $player['Name'] }}"><i class="fas fa-volume-mute"></i></a>
                    @endif
                    @if(PermissionsHelper::hasBanPermission())
                    <!-- Icon for ban action -->
                        <a title="ban" href="#" class="action-icon player" data-action="ban" data-server-id="{{$server->id}}" data-player-name="{{ $player['Name'] }}"><i class="fas fa-ban"></i></a>
                    @endif
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

