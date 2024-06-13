# README #

## What is this repository for? ##

The purpose of this repository is to maintain control over versions of Snyk. This maintains uniformity when enforcing
coding standards and formatting rules. This allows for easier upgrades and prevents newer versions from breaking the
pipeline.

---

## Configuration information ##

There is a '' file containing the Snyk configuration in the root of the project directory. You can
use the following YAML line to copy this into your project directory.

```shell
cp /app/'' $GITHUB_WORKSPACE
```

Alternately you can use the following command to use your own configuration file.

```shell
snyk .
```

See links below for more information about Snyk and Alpine Linux.

---

## Useful links ##
  
* **Project links:**
  
  * **Project Docker pull address:**  docker pull monkeyknuckles/snyk

  * **Project Docker landing page:**  <https://hub.docker.com/r/monkeyknuckles/snyk>
  * **Project clone address:**        <https://github.com/NinjaMonkeyGames/snyk-docker.git>
  * **Project landing page:**         <https://github.com/NinjaMonkeyGames/snyk-docker>
  * **Project wiki page:**            <https://github.com/NinjaMonkeyGames/snyk-docker/wiki>

* **3rd Party links:**

  * **Alpine source pull address:**   docker pull alpine:3.20.0

  * **Website:**          <https://cspell.org>
  * **GitHub Snyk:**    <https://github.com/streetsidesoftware/snyk>
  * **VSC Plugin:**       <https://marketplace.visualstudio.com/items?itemName=snyk-security.snyk-vulnerability-scanner>

---

## Includes ##

* Alpine Linux              v3.20.0
* Node                      v20.13.1
* NPM                       v10.8.0
* Snyk                      v1.1291.1

---

## Files ##

| File Or Folder Name:                  | Files | Description Of File Or Folder Contents                               |
|---------------------------------------|-------|----------------------------------------------------------------------|
| .cspell                               |   1   | List of exceptions for spell check.                                  |
| cspell.config.yaml                    |   1   | Contains CSpell configuration.                                       |
| > .git                                |   28  | Contains git configuration files.                                    |
| > .github > workflows > pipeline.yml  |   1   | Spell checks all files in docker.                                    |
| dockerfile                            |   1   | Information on how to build docker.                                  |
| README.md                             |   1   | Contains information about the project.                              |
| LICENSE                               |   1   | Repository license agreement.                                        |
| avatar.png                            |   1   | Personal avatar for (Daniel Mallet) internal company use.            |
| logo.png                              |   1   | Company logo.                                                        |

---

## Version history ##

This project uses a sequential versioning system.

| Version No:    | Description Of Update                                                                               |
|----------------|-----------------------------------------------------------------------------------------------------|
| 0.0.0.0        | Base files included.                                                                                |

---

## Contact information ##

Author: Daniel Mallett (Monkey Knuckles)

![Ninja Monkey Games](logo.png "Logo")
![Monkey Knuckles](avatar.png "Avatar")

If you have any problems with the repository or have any suggestions please contact us at <info@ninjamonkeygames.com>.

You may also contact us via our [website](https://ninjamonkeygames.com).

Any bugs should be raised as an [issue](https://github.com/NinjaMonkeyGames/cspell-docker/issues) on GitHub.

---

## Copyright ##

*Ninja Monkey Games Copyright © 2024 All rights reserved.*
