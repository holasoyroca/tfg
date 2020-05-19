#! /bin/bash

sudo nft flush ruleset
 
sudo nft add table ip tablaNAT
sudo nft add chain ip tablaNAT natEntrada {type nat hook prerouting priority 0 \; policy accept \;}
sudo nft add chain ip tablaNAT natSalida {type nat hook postrouting priority 100 \; policy accept \;}
sudo nft add rule ip tablaNAT natSalida oifname enp0s8 masquerade

