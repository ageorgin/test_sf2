insert into `format`(`name`)
values ('m3u8-download'),
('m3u8'),
('smil-mp4'),
('m3u8-secure'),
('smil-mp4-tvconnectee'),
('mp4-dp'),
('m3u8-sony'),
('HDS-Access'),
('HLS-Access'),
('HSS-Playready');

insert into `host`(`name`, `pattern`)
values ('Akamaï transmux m3u8', 'http://ftvodhdsecz-f.akamaihd.net/i/[VIDEO_PARAM],k.mp4.csmil/master.m3u8'),
('Francetv m3u8', 'http://medias2.francetv.fr/catchup-mobile/[VIDEO_PARAM],k.mp4.csmil/master.m3u8'),
('Akamaï transmux mp4', 'http://ftvodhdsecz-f.akamaihd.net/z/[VIDEO_PARAM],k.mp4.csmil/manifest.f4m'),
('Akamaï transmux m3u8 secure', 'http://ftvodhdsecure-vh.akamaihd.net/i/[VIDEO_PARAM],k.mp4.csmil/master.m3u8'),
('Akamaï IPTV', 'http://ftvodhd-i.akamaihd.net/i/[VIDEO_PARAM]-1400k.mp4'),
('Francetv IPTV', 'http://medias2.francetv.fr/[VIDEO_PARAM]-1400k.mp4'),
('Francetv TVC', 'http://medias2.francetv.fr/hbbtv/replay/[VIDEO_PARAM]-934k.mp4'),
('Akamaï TVC Sony', 'http://ftvodhdsony-vh.akamaihd.net/i/[VIDEO_PARAM],k.mp4.csmil/master.m3u8');

insert into `coding`(`container`, `codec`, `bitrate`)
values('mp4', 'h264', '398k'),
('mp4', 'h264', '632k'),
('mp4', 'h264', '934k');