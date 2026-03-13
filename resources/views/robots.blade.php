User-agent: *
Allow: /

User-agent: Baiduspider
User-agent: BLEXBot
User-agent: dotbot
User-agent: EmailCollector
User-agent: EmailSiphon
User-agent: larbin
User-agent: LinkpadBot
User-agent: moget
User-agent: MSIECrawler
User-agent: MJ12bot
User-agent: NPBot
User-agent: NPBot-1/2.0
User-agent: Nutch
User-agent: Offline Explorer
User-agent: psbot
User-agent: SemrushBot
User-agent: SiteSnagger
User-agent: sogou spider
User-agent: Teleport
User-agent: TeleportPro
User-agent: TurnitinBot
User-agent: WebCopier
User-agent: WebStripper
User-agent: trovitBot
User-Agent: trendictionbot
User-agent: CriteoBot/0.1
User-agent: linkdexbot
Disallow: /

Clean-param: utm_source&utm_medium&utm_campaign&utm_term&utm_content&gclid&yclid&fbclid&ymclid&from&ad_id&banner_id&addphrases&addphrasestext&campaign_type&campaign_id&creative_id&device_type&gbid&keyword&phrase_id&retargeting_id&coef_goal_context_id&interest_id&adtarget_name&adtarget_id&position&position_type&source&source_type /

Clean-param: region_name&region_id /

@if($subdomain != null)
Host: {{$subdomain}}.buro-zaimov.ru
Sitemap: https://{{$subdomain}}.buro-zaimov.ru/sitemap.xml
@else
Host: buro-zaimov.ru
Sitemap: https://buro-zaimov.ru/sitemap.xml
@endif

