# Font Awesome
[Font Awesome](http://fortawesome.github.io/Font-Awesome/) integration for Fansoro.

## Installation
See [this instruction](http://fansoro.org/documentation/plugins/plugins-installation)

## Usage in page content

Simple usage

```
{icon name=camera}
```

Set size from 2x to 5x

```
{icon name=camera size=2x}
```

Add other class name

```
{icon name=camera size=2x class=classname}
```

## Usage in template
```smarty
{icon(['name'=>'camera','size'=>'2x','class'=>'classname'])}
```

## Options

| name  | value | description |
|---|---|---|
| enabled | true | or `false` to disable the plugin |

## License
See [LICENSE](https://github.com/fansoro/fansoro-plugin-font-awesome/blob/master/LICENSE)
