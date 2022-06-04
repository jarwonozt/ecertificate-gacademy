
# G-Academy Class Certificate Check Application


## API Reference

#### Get all items

```http
  GET https://g-academy.net/api/v1/public/certificate
```


| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| `code or username or class name`      | `string` | **Required**. important to check valid certificate |


#### Example

```http
  GET https://g-academy.net/api/v1/public/certificate/key/ABwd21
```
```http
  GET https://g-academy.net/api/v1/public/certificate/key/coinima
```
```http
  GET https://g-academy.net/api/v1/public/certificate/key/DEMO PREMIUM CLASS
```

## Demo

https://certificate.g-academy.net

