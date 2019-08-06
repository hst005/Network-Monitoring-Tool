#!/bin/sh
echo "hello"
/usr/sbin/tcpdump -i wlo1 -ne -c 1000  > packets
grep -i "ip" packets > ippackets
grep -i "arp" packets > arppackets
grep -i "udp" packets > udppackets

#timestamp

cut -d " " -f 1 ippackets>timestampip
cut -d " " -f 1 arppackets>timestamparp
cut -d " " -f 1 udppackets>timestampudp

#smac

cut -d " " -f 2 ippackets>smacip
cut -d " " -f 2 arppackets>smacarp
cut -d " " -f 2 udppackets>smacudp

#dmac

cut -d " " -f 4 ippackets>dmacip1
cut -d "," -f 1 dmacip1>dmacip
cut -d " " -f 4 udpppackets>dmacudp1
cut -d "," -f 1 dmacudp1>dmacudp
cut -d " " -f 4 arppackets>dmacarp1
cut -d "," -f 1 dmacarp1>dmacarp

#dip 

cut -d " " -f 12 ippackets | cut -d ":" -f 1,2,3,4 >dipip
cut -d " " -f 12 udppackets | cut -d ":" -f 1 |cut -d "." -f 1,2,3,4>dipudp


#sip

cut -d " " -f 10 ippackets>sipip
cut -d " " -f 10 udppackets|cut -d "." -f 1,2,3,4>sipudp

#length

cut -d " " -f 9 ippackets | cut -d ":" -f1 >lengthip
cut -d " " -f 16 arppackets >lengtharp
cut -b88-89 udppackets>lengthudp

#dport

cut -d " " -f 12 ippackets | cut -d "." -f 5 | cut -d ":" -f1 >dportip
cut -d " " -f 12 udppackets| cut -d "." -f 5 | cut -d ":" -f1 >dportudp


