#! /bin/bash

sudo nft flush ruleset
sudo nft add table ip filtradoWeb;
sudo nft add chain ip filtradoWeb registroAccesoWeb {type filter hook prerouting priority 0\; policy accept \;};
sudo nft add rule ip filtradoWeb registroAccesoWeb ip saddr 192.168.1.55 tcp dport 80 counter;
 

sudo nft add table ip tablaNAT
sudo nft add chain ip tablaNAT natEntrada {type nat hook prerouting priority 0 \; policy accept \;}
sudo nft add chain ip tablaNAT natSalida {type nat hook postrouting priority 100 \; policy accept \;}
sudo nft add rule ip tablaNAT natSalida oifname enp0s8 masquerade

