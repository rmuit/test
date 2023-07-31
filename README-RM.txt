# NEWER: I changed docker-compose.yml; just do docker compose up, after
# changing .env.
# See there for multi-SP setup.

# Older/alternative docker run command:

#SPBASE=http://d9/basepath
SPBASE=https://samlauth-d10.ddev.site
docker run \
-p 8080:8080 \
-e SIMPLESAMLPHP_SP_ENTITY_ID=http://app.example.com \
-e SIMPLESAMLPHP_SP_ASSERTION_CONSUMER_SERVICE=$SPBASE/saml/acs \
-e SIMPLESAMLPHP_SP_SINGLE_LOGOUT_SERVICE=$SPBASE/saml/sls \
jamedjo/test-saml-idp
#-d
#--name=testsamlidp_idp \
#-p 8443:8443 \
#
# This starts up a new docker image with a new name (if --name not given;
# if it is given, a second startup fails. I don't know how Docker works yet
# and don't really care about this atm).
# App reachable on: http://localhost:8080/simplesaml/
