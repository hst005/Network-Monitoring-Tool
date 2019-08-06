#!/bin/sh
echo "hello"
/usr/sbin/tcpdump -i wlo1 -ne -c 1000  > packets

#working well
grep -i "tcp" packets > tcppackets
grep -i "arp" packets > arppackets
grep -i "udp" packets > udppackets


#timestamp
#working well

cut -d " " -f 1 tcppackets>timestamptcp
cut -d " " -f 1 arppackets>timestamparp
cut -d " " -f 1 udppackets>timestampudp

#smac
#working well

cut -d " " -f 2 tcppackets>smactcp
cut -d " " -f 2 arppackets>smacarp
cut -d " " -f 2 udppackets>smacudp

#dmac

#working well
#cut -d " " -f 4 tcppackets>dmactcp1
#cut -d "," -f 1 dmactcp1>dmactcp
#cut -d " " -f 4 udpppackets>dmacudp1
#cut -d "," -f 1 dmacudp1>dmacudp
#cut -d " " -f 4 arppackets>dmacarp1
#cut -d "," -f 1 dmacarp1>dmacarp
#working well

cut -d " " -f 4 tcppackets | cut -d "," -f 1 >dmactcp
cut -d " " -f 4 udppackets | cut -d "," -f 1 >dmacudp
cut -d " " -f 4 arppackets | cut -d "," -f 1 >dmacarp


#dip

cut -d " " -f 12 tcppackets | cut -d ":" -f 1,2,3,4 >diptcp
cut -d " " -f 12 udppackets | cut -d ":" -f 1 |cut -d "." -f 1,2,3,4>dipudp
#doubt not working 0 bytes
cut -d " " -f 14 arppackets | cut -d "," -f >diparp

#sip

cut -d " " -f 10 tcppackets>siptcp
cut -d " " -f 10 udppackets|cut -d "." -f 1,2,3,4>sipudp

cut -d " " -f 12 arppackets | sed 's/is-at//g' >siparp

#length

cut -d " " -f 9 tcppackets | cut -d ":" -f1 >lengthtcp
#alternate
cut -d " " -f 16 arppackets >lengtharp
cut -b88-89 udppackets>lengthudp

#dport

cut -d " " -f 12 tcppackets | cut -d "." -f 5 | cut -d ":" -f1 >dporttcp
#dontknow
cut -d " " -f 12 udppackets| cut -d "." -f 5 | cut -d ":" -f1 >dportudp


