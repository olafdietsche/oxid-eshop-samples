[{include file="headitem.tpl" title="GENERAL_ADMIN_TITLE"|oxmultilangassign}]

[{* NOTE: Oxid framework needs this form for switching between tabs *}]
<form name="transfer" id="transfer" action="[{ $oViewConf->getSelfLink() }]" method="post">
    [{ $oViewConf->getHiddenSid() }]
    <input type="hidden" name="oxid" value="[{ $oxid }]">
    <input type="hidden" name="cl" value="order_tab_details">
</form>

<p>Hello, world!</p>

[{include file="bottomnaviitem.tpl"}]
[{include file="bottomitem.tpl"}]
