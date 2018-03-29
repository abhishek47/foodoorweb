<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li><a href="{{ backpack_url('dashboard') }}"><i class="fa fa-dashboard"></i> <span>{{ trans('backpack::base.dashboard') }}</span></a></li>

<li><a href="{{ backpack_url('earnings') }}"><i class="fa fa-money"></i> <span>Earnings</span></a></li>

<li class="header">Manage Entities</li>

<li><a href="{{ backpack_url('orders') }}"><i class="fa fa-file-text"></i> <span>Orders</span></a></li>

<li><a href="{{ backpack_url('restaurants') }}"><i class="fa fa-building"></i> <span>Restaurants</span></a></li>

<li><a href="{{ backpack_url('items') }}"><i class="fa fa-list-ul"></i> <span>Menu Items</span></a></li>

<li><a href="{{ backpack_url('cuisines') }}"><i class="fa fa-th"></i> <span>Cuisines</span></a></li>

<li><a href="{{ backpack_url('cities') }}"><i class="fa fa-map-marker"></i> <span>Cities</span></a></li>


<li class="header">General Options</li>
<li><a href="{{ backpack_url('setting') }}"><i class="fa fa-cog"></i> <span>Settings</span></a></li>
<li><a href="{{  backpack_url("elfinder") }}"><i class="fa fa-files-o"></i> <span>File manager</span></a></li>

<li class="header">Extras</li>
<li><a href="{{ backpack_url('backup') }}"><i class="fa fa-hdd-o"></i> <span>Backups</span></a></li>
<li><a href="{{ backpack_url('log') }}"><i class="fa fa-terminal"></i> <span>Logs</span></a></li>