# Leanlink api wrapper

### Symfony config
```yaml
leanlink.client:
    class: GuzzleHttp\Client
    arguments:
        - headers:
            'X-Auth-Token': '6147577b-2856-4ff0-b330-ee58ef8a2656'

Leanlink\Leanlink:
    arguments:
        - '@leanlink.client'

```

```php
echo $container->get(Leanlink\Leanlink)->resources()->find('a9549cce-de8b-4545-8696-2e6bd401ac23')->getFirstName();
```

### Plain php config
```php
// Token set in construct
$client = new \GuzzleHttp\Client(['headers' => ['X-Auth-Token' => '6147577b-2856-4ff0-b330-ee58ef8a2656']]);
$leanlink = new \Leanlink\Leanlink($client);
echo $leanlink->resources()->find('a9549cce-de8b-4545-8696-2e6bd401ac23')->getFirstName();

// Token provided for each call
$client = new \GuzzleHttp\Client();
$leanlink = new \Leanlink\Leanlink($client);
echo $leanlink->resources('6147577b-2856-4ff0-b330-ee58ef8a2656')->find('a9549cce-de8b-4545-8696-2e6bd401ac23')->getFirstName();

```
