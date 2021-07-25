<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>chatting app</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia|Audiowide|Trirong&effect=neon|outline|emboss|shadow-multiple">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    
</head>
<body>
    
    <div class="container">
         
        <section class="form login">
            
            <header>LOGIN HERE</header>
        <div class="error_area"><p class="error">email/password seems to be incorrect!!</p></div>
        <form action="#" method="POST">
        <div class="private">
            <div class="feild">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAwFBMVEX/YQD/////YAD+YQDl5eXk5OTz8/P19fX4+Pju7u7/VgDp6en8/Pzt7e339/fo6Oj/2cX/XAD/VADk6+7/bRr5gEPp08f/iE39ZQD/cSL/59r/zLPp8PL/dCr/uZn/w6bo2tH6pYH6eDL2kmX1q4r/08H/597159/l3tn/r4//+fPutJz/jVr/x6z3l2n41cLsxK/uvabz1MT3oHbx6eP0mm7xoXv4uJr/kl73hlH+fj//ejT/9Ov/xar/tZP/pnyibG/oAAAZd0lEQVR4nNVdB0PbuhaWZYckykJ2aAaBAoEyS4HbAZRH//+/etrL8pDtAj3lxs6JrqMvRzpLC0RRNO4lyZBcd5IkmZLrKEl6gj0JZvc1OyGXKEuOPp19fj3ePp0crObzZbxczlcHvxfb49PPZ1/Oe1k2IKUm/CGR8ZB+W/aUs8HfQrjJZhfr/cvFaolRihDGGBqEKaE0xcvV4nJ/fTXJsuRtEPb8UHzsfiE7GUfR+np7EiOKDEJAIAH2Qm8BexVcihWhND7ZXn9qCyXH7nGEY0Kz0WhILjuz0WxKrpPRaNaUHU03o4fXx6XEBgRBqF6hYvA/wGSK8PLmcD3aTOiz++TZffvZk2r20MsGvV5vRgAPyHWHXIfkOqa/QxP2OMsu7m/nBB1U0GoRx0mkOb/dfyEN1nx20uslrI30esNi9k4hGxAJj2idyZU9l0h6zCXtY5O3s2L2+fUeRqy/SflALjUtQGDemp9JYSK8d30knp0Yzx4nvCtJ9oxrMsmmWmFgsHXHUwh7Sc9BOAthzzYvX28ovLiGyHJlTAYBCW++vrDuLxCadR762bK0i7CXgCGhwWDQnwwnO+S6MxxOpuQ6CWJvhg/bmMALBOMy5C0BGd9+G26GffJst4LkarCnheyhYAtd2ptwwD0m6Z7UjorNlGZPqirG7kt2kl0cHnjhtSCI04PDq02S+0qmNHVNRlxplrDb28PNp1vSOmtXvU4r5kSeevuphZm07aElQw3FlmH+ByXs3Sfcsfg0ESPydGdCkcLKGT6XbcpwpwX1B98W6V/Dxwini2/TfptKgsTRjj2/0vSyd59TTJod+UcJ0AuIHUYMxTvFkBdWWl+KCuP0+UG0qKFRE61LheErYje3h9P1gnY/UxXye82pVqRlpApjtFi3soc9v7DK2dnRLVcvrrKP8/eBgDyE0e1L1lSGU0JDajym1LoN+9MptSmTQQX7FBLjLhsX0O0MiFejEQLd5kxGrkRZYfJtp4Nxn341r8lQ1HtIatQXFfWzLWvR88cWLnuW3a0QlL8773jGLb9TDCUeL0M0bZPhLwzRapd0jga6NNweZhdbjk9XMdb1iq3KiXd5GLELQzOKCuN0e5E1tYc9Yfh6wqfp8ZKazX0azr5fYi02C5LBkH+qurH8KWL9q8hX67OSwnh5n02Z86IqyIXVEz6Njw1GPJiakqBqR8RYAx1juezR5uIRWQZQtUqtKwyGoz7aqh6IHr9vRE0IkctAVHBnlGMPOduILVxrMfOws7slVn1NGT+XoeQg+6h8VRLWjLLP8oWJGO+ypCC2qIie6tnDHwi69Yo1I7YZwGQwxchSNPRFqktXE5uFDdVsFIboR6A9dKL2SVkw/3KAoCE23QPF1RKp05NooiKFy+X892q+ZBkcaKiUWL/GpQzyH16dR2Whf89g0xi/vqbZ3GMsfkxb07kMoyOKD2mC4vn46/rlij43unr5cvb6SGIHbBaPTUC6nVuuEiuM8X0WoGnqW4ufRMUEqQpJNJ4949gs2r383cxvh+jnLNBa1MgmXi1QsyACo+evHngC5C1o9Fi0d5WDUoSQp99mRn4wmpBrZLMH5wf1g1wb32K3CB6jl+NG8SU+OI9oBa0k40xmE2fh2cQHYuVlejOAYPpcjo9h/BGQItAQlw9ZVEvT1LIW+1ikcsMQYnxYiY/S+gCFQ4T4Puosm/grhYZXVrsKaO9LLYCELtPwlgrTX9XZRIJwMpnwZN1EZOUmPG2o2MPpa6oc7QCMMP1TFx+hMxDeUmF6OJ4a9WbZRHJl2UTFrpFNvGyk7SD6GgCQttQGnRH93ETts4l/GjQg2gWrVYxNV8/hnRGi/6KW2cQhAahaZoCmwXAdCJDQXgN9Q7tCq2zi9DLVMRv50wgNVwrkbiFoADCKFm5Dre72ML2ctsomvlJPzQ5saxBEoU2U01WDvgjRKe2LTbOJv2gfDPZFYfq5EUBi/JfBfR5C9CtqnE3cN5VMfaAoxEzYtBust0mwme7XyiaSi0gbTkVWbvBQ4jAWdEMWvz03BhhFh428m4fNjq63vIrcY0k28XwJoQrf6IujS73w6Pc10jKSnsO6IlF+NLVxxBJUgdnEJt2eEqrnixbRS+AUAEZ49T0KzyYusI68IaitS/HvVgCD2yn5QWII8SKqzCaOVNpwRLNym5/qi8J0adrMUBi0ChKimIJE/LeRmPvCsomjymzivVJqUGdSanw1vmkLkGhw66eNndvcZ6yOEN1nQdnEF6ynhqivqOO1oVZqhlMTux9DfFQQPfmzieJLbEA1EHYgQiLEoJ7Icq+kN+JVWTbR8byzH0h5ojJdqJOgZdS+F1JaGgM/9Qn/yOpGT5s7BHNNvt6XtDH2mkLUqTHhEd1lNbOJF0uok7wGymqozEVsTy8B2Tc2tYx3ILi8MOemWNnE2WwYjaMdcqXZxEcc3EIEpS+dIMyHUXWAkib0lAk4k4hmE2f+bGJ2j+Kq7lZAHTXSKPpf/WYqZcjmq6L9rDqbOLtwIxg/Wp+FQk2jJpdCmilQ8yDJTzy/mFVmE7MtlmMkFZRXRqh29rCK6vvfUE5AZq94m1VmE+9yDaR2i4XLrgBGx/URAmNONXFt7jZV2cQVVPOVXKBVUDsx95zCjD7QrgheVdjD7JQ+ukYb9bmIHdkKSmEdEepXSIK30mziEYQ50+eFm2NShGedIYzmtRGKJQDiNYbgJXGziXzmX59ep7cqKKxA6KPuFE0U/Q6xiMa0ctJOb6cSDrva2cQ1gnpgvphi9x1jwLhwIDScHusihFLPQOnB0fCmMJu4wLE5lu5gqhAmPOgOYPRaV9VAZ84/EeKiMJvY30V10fioM4+G0ucQZQqtP5qPLsgmDp6xOb2ilDy6lOVKuqIAv01gjNUd3tsUZBO/pV7Z5Xod/xGcz+K4Q3MYYhDlWiqlSyFM74wpiyZCll2T8+jCCT92iPAsrf5CgVAsplKdkYT7e/5s4m7th74FwtqaRulS4y6lM8Nz2cTNE46BnpwbHgG/TytVq+GkYwNZVTZqyqK2Fp8wNCblNtGlTx0iDNQ0Lmz8aZaLnrJbrLyZZhFwp9biV1ArtYgtgbvNctnEC9PXtQDWRdupxb8MlKFer8lh4ws3m7ih+S3VD2t5bbF+x7028M5em+G60fEh11o0HGky6b08bxVdiKwbveADJ3qaPfC4MC4If+shfJfoCbhNlDNSunbByCZutnwyq/TaKh/6ASNg454FUQOaTYxkNvElhhJhRQQc+5ic8T5ZjFwELG/poKnOJn5FemCicQTcYSbqT1AAbEXAjEPTGf+LTHt4g00wzbohgF0MrXGqr2gcr03bRNaiZDZxfI7lSKGa9d9k3KKzjhjQDZXkZASsQmJ8rrOJ2TXSOBpHwKQjnnSEMCj+dSNgICIqdJ0pe5jtqUbaIgIG3Y3M7IUZZ6giYAhULAXxXibtYWR4bI0jYHbbcqaJpCBbAS1NI0faGMQLhrDf70/vEe93htfWcPCp7VQTTrXTUAyhmYiyGOi+v9PvU126uS1tFCFgOx3lrgvQ1KZAXmiof6uyidJFMldY+416FXWSjfraKjZksPnfXNrDBzl3xuPQFJHPI4g7MontgwAR76M1zyaOXxFUgX0ASC91IMSvYfkic2zNiqTo5NopzyY+YiVDpfqbeG2MWvfEcVBYoXDaETD/w09Tbi2WUNu0FhEwJ9w20g9SpIURML9dcnu4Nufltm2lxCa+tgL4JXydl2UujLQpH6QBow1x2aDpy/gVaf3vazeD9qSBmvF4bfwPXW9GIMm26pmtvTZGrcx+YBs1MEqvTbzledNtRqzF7MRG2DwCloR+NAa4G75AJx8B6yEMfDIjCC8o0/DaQKs2yiht6p6u40Z6FCrvVHZACTy+SABRNJ7/qR3EN11R4hu3kBv6wXRNdKmREjHGLYCnpdaHDYPXdTGAgfP0+VdZXjeANgPtE4R08V3ea2vZTptAbLJ4TX+h5x15RZcEoTEPMECXVn5jg9V5jdxR1eXs7sj/UScSZCuoQmSuS9uafPHNgdP41quG/rZKzUDzVgbBqwwkRjAGBcK4AyEGrpLdx40BWjrGyLqx22UCjiq9pMZg0e+63s242UJVTkZcAd1WCvER+ORsN6PtoUZWZOWrCNf0UXfnDfdrYAA1INkbjTfoEzhDUFh8I1/aNE+T+3b0u3q0Zr1tsuOACVAHiNIOKkZ6BlhqEjobjFj9sBVYnO5V7Brxpw0+oDVNrHuiMYSBPgMW4LsRcJeE04PPhWnUs5vWuxJySNIZBcYtQ/gKju0AP857pq1As52Q8e+vY7/8fi/px20wVuhSfAy2vjbSUS8ktQeL4/11yej31frs8mbZAqUAE5udUDIowi14MhD6R9eaw3s+3q01tD/efX3GDZurMbYN8j4NwE/ghLG0Lu0GIEZ4sR80ceHq7BE2kaTEpJwaM09DLifgQMAv1qXhX4rRXrFyKSa213KzCFh7bVqX8tcDsIKOLs0NuYR+I4I/GmdqXo6XgcbD0DFWP5S3K1CdnQwCC9HytdUQ29WvMAfHQGeQZswJQv08O4vRYNwCoviz1y4E0X4IRtkylZkXjFi8nYMlK2YiBE1VDbF9l91Mizpc1sYo1AjUN9Loc/wMCrS9tqaKBqLbjoaASVs9rtsd7fyM2Qc5KwZLaUqAdmsaEVp2MnYoaf27phjNgDcXAXOEdj9sGAGHxbu16LWWGB2vLXa8NrjsSJfieacC5FR3kzNzZM2NgImmWalMm6tLcxiLoaK9znqgSVeP1S3VBJRDSP6tiE/j9dpCWilMb/8GPkqvldkNrWMMp8YIog4Am1/VKgIOzaoF0X6lqwqhFpvltTGLiE/AAreMgCHa/3sAo2i3Igln9D4jhaHYeKHjQ8MfDYmA/zJAAhGWQrS9tXwEvNUxvoDjc9hKNM1fB0ghljVU2UiLIuBjcOpEwFaEUUkwDds7sBnECnWTi4CVJiVm7BR8Rm0iYHT59wGWzz8xI+Bc9ES1IDhLOdpGETDqcqlTCf0pMf3lEXB6Br6kjtdW+FvlCR+0D5XqUfFGGY6OcSPg9As4bz5u0eGs5yoq3gFMG3tbpQoGPgc9cyJgHBQBv00n5FTYFZ0IWHVAkV5c9uj4IciPW9RRNa1nPwVRUTuVDhpUvraOgKlbmoGM/q+lXlsRNZyO0JCK5g3nG6buh4C4NBkY0FViTSLgThdU1qAifWpHwECrVfqKLge5uRi1I+D0zdQMpwIh+nWpvGVzMdbNhl/fWoRF62gMA2iZev6Pzae5iqHZSn1OjU+gby3CIiGa4xb5CDi+isBkcoIbeG1w/tYA1dIlF6EVM5kWnyiak8lEzE0MjoBbziJtRP4FbTK40LkaHQHzuYkZm19qybAIlvHYLteL1qUrn+to2HrDBxe6FF0ThD26TL0cjoc6WjoSSL7Fwba3ZmZtqM/2kPTEPG8tw3pe21s6bJp8i/RlaKGapjluIeZ56x6szH2lqvn7kb2P1n7n1PLKoc7h67n6h8gdt6jUpeiv5Eer6MqzXMiNKkyziE4FwrW9osTfRO3Hrt4qMLTJt2rPiYBNNw490FZKtxWWmf3aM/fe3qHh5FmCVuK14blc6Ry+dq3TjVoCyLsVnxVXmD4NXbvGV3ZNTOe71sw9/NfS+OXk27rVdEPtXBtRh3Kls/T4dARc1UqP3wehx6vRKTZghPnsBb+M1UrnPRzmteEfu+9CryWaJjdzD+8ZK531Wu664S8Ko5T9sZvUZsjbHMNXuMj1NsYt9C112SRCul2iznZ3OnPvr1OxLoVHfPeWPqGdHScw+digLBK48jP38M3OzlCsdJ7JpbdFEfBHpsKZe3xfDLVvor23yT8EMBcz6SbL9jbh9pDuE3Wr9qdpP3Pvbalg3AJvxQE7rB8Ohzt0R8GACPjjkKFjrH6YfmP7JpJ+GFXuE/WxwRrozNiC7hNl74Sl9/qqP27xIcgZt5ARMN3ry95HeHiFoUAI/ilV45+5B/GVkiHxS9mRlpvWe+69D1n2Xt3i282E7ZtIs4l638SwcYuPQva4hVCrvn0Tk4zvfdnZ2rU3Isdr4zP38E3mOYUluSsYhPzwYM1sMLf/6bfEPoUlcfagDZhP8+7km7mH9ygczxklfB/hOhHwByIzByxNh9hHOI9w+ox9XtsHBwtlVKgA4ufMRZhwxdN/QB8dTp6M3ie9NvQw4whnicgm6lNYFlh6M/+MDG1vjSLke7IXnMKyRvmjEcAH1zTQmIrBEIp99T2nsNBzZnxnI3x4siNgvI1yp7Awr40eWzIev7DzLf4lgGYEzCV5Tjfv5nDG+VNYslP0j0fA7IySslPJBkVbGzSasPEG5HhteF50Kpk8SWec33v+Y4vTiYDpVmPOOaQ8i0HD/T47S3awxf9wBIy3AwuOzibqE60Sfq7ch0TjI2vmHp5f1DjTObtH/5KmMfohcUj3M+8pnc6Zzlnt/dA/BBkRMH40TulUMnT6IblOv5N2+i/KEC6/7+ThuLpUnGH53vWuT8ZwmnGGZdWZztkPXDlz76OQnpqA9DmkJaeS9cSZuk23NHp7UjETPtCnVls+je2XjofkOhiPzRn8H1mCwAgujuhZ1AKO6ZcWnun83jWvSdLWo/us4MRj/5nOUfbzH4EoNCn6mSUFp1bnTlplZzpHvVl+/tGHbK5czeC9GZdMwZnOiUwQz7guJddmmxi+DxEts6LDoRNSb4Zylph5Gp+14DrpPGRb7Xcj5m8vj6YMYYm18CGMHtpu4fQmRA3FQ9YvR5jkELLemt232CfurYjGhPds4gxFyE6tTmyERZqGsX+l8IMqGE2Qnaoh6+3RNAXWQvh2h0jM0QDgg0KF6HQjMzDl9rCXQ0hFO/7wZpEYQnkufIHFl27OSHltI+r9jAR78x/viyXye9dsR/qfGuwdTQ2vbVSUTeSedy/pafaflJ8RDO2FYW4aD1ixqPUZNG/t2ZLiHpiMkMLoP+1iR5Oe1/MuthYybLzU+w4qvWOkqmIAXYZZQlVSzccyphLK6TCaEVYY/aR9sM+VZoU9NCNgB+H0FEFThrHAK27pK/QwxK2V64NyOoicGGIxYGjh9DSbmDLUCO1sojh0tT9l2URxnRrsDTEatK5mw3NHJqEWgRyL1S0Kmq9ljKDCMP21UfVW9RdZDM32ZKJMXSrYdA9c3dfs39mBCqA54mWW870vpfLCGN/bKSduD2tkEy17KNkPSywQAv1qUBnD0FO8d8qfSnZr9duFFMbLh8zxx4rtYbUMo83RCqsubutLpSLUO2eWoCMTn4SBy6gsjFdHWVJPhnyO8M6OuIgrb88Ge/p9gYwOpkbrTFgWQxWWVfPWHpQyij/De9+ndgUL6p3PJg7yulSq2J/IXHJTbCCBxagQiIdRXRii+YVpFsp1abU9lOzNPdc37J8yC8BiQJMhpG10LgVdWTjOoD6F+qyyMIb3rIVKhLXsYYlPo81kRjuj7l227BTDY1K6tRXo4CjzOS9FPg07HXAgsokDnk0cDLh/Z7OnxF/9YWwvZqhVU88Ch2GAlgIzGGWf+QujH5PBWFVwKiq4QyvoZVfEFi47u1uqnbOgtAVQ36pWphhub+Oy0BIBuW5XVpgYibsssZVmUhFb1LOHkp1kF08I200o1xYtL7lYX8Quw0bnK4zTx+9ZkphQqu1haYzvYSfZ/hw7KJye4vkM2iU8ONzPfIXxfJ9G7TKY51B4MF8S47PfYTazsomzWeJhTwQ7u9giLGcWQdUkmUNuxhWx0kVG8zWUq+poDqOoME63F9msL2rC04YzrktnSTE7wFoo9iy7WyFDgfs9G6OVWjIGLsMr2FxhYgPlGcauWagXPYUgTJJNdAiwg8a1+FYkCz231QzjFoPDQig1EOaziRUICfvlFskDaHkEHLshMWfIrilkLmuuGVAVkQLLFYYYbc+LoVQgDNU0kp1M1wu6HhB6ImDj1gxq2WvsSij2f2YwMFqsfSqlpqYJtBbCTHL27l4q1CpQ1ln/k822pOPlPvMUxunzg9HQSE0CrUWYxXfYmzuG0aSciW9HON27y2ZGnY3fuqbF1+m3EcsmjuxsYgV7Mnm4wRiaDpvp0gFlPGAuqI2LGbIwieNvvg3tr9wZuWlDH3ug2UA0Wu5i94TnrdqyZDNNw9mRYPcFe/PpFrMOyR24nOHQkiwwDI7IVWHy1NtPIojQX8ldbFUT7mKXsZtZC4s9yy4OD1Ksu5YZ7EDL87QwGnAMjEp9pgeHV5tZHaUZYA/92cQCdt9i727Z2Q3aCAJL3ReLzN/7ULz95oGSD3VrRMDTqUgbTkU2cTod0mxibTbLPU4Hg+//uyHtikFTHp24NYMO0xFzPhMM8pSb/33f6Gezr5ZfuVPO7ufYRJf2amSi6rHPr/cYSMeqFdoKl0FThAjvXR+Zz3ZySwXs1tlEvz3MsbPs4v52jpCZerQduBzDCHgxQvPb/Zcsk89OjGe3soedyZCaSdLy16dP9GwczEZ0uM9iOW9KIYlAXshu+XT6UC2scBn6s4k7rdiks66vtydxynFyiq2LuqOnJaXxyfb6gXShzmuis4lWJqqJLrX0HTOT2exivX+5WC0xYkgt3wdTQmmKl6vF5f76apLZ2TO/0mymS6PW9tABbk93iLLk6NPZ59fj7dPJwWo+X8bxcr46OFlsj08/n30572XZwAMlyPCV28P/A9F4CGM/4+YMAAAAAElFTkSuQmCC" class="avtar">
            </div>
           
            <div class="feild input">
                <label>
                    Email Address
                </label>
         <i class="fa fa-envelope icon env"></i>
            <input type="email" placeholder="Enter your email" name="email" required>
            </div>
        
        <div class="feild input eye">
            <label>
                Password
            </label>
            <input type="password" placeholder="Password" name="password" required>
            <i class="fas fa-eye"></i>
        </div>     
        <div class="feild sub">
          
            <button type="submit" value="Log IN">LOG IN</button>
        </div>  
       </form>
    
        <div class="link">New user?<a href="register.php"> Sign up</a>
        </div>    
    </section>


    </div>
    <script src="javascript/hide.js"></script>
    <script src="javascript/login_form.js"></script>
</body>
</html> 