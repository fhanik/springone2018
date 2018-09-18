package demo.springone2018.saml.config;

import java.io.IOException;
import java.nio.charset.StandardCharsets;

import org.springframework.context.annotation.Configuration;
import org.springframework.core.io.ClassPathResource;
import org.springframework.util.StreamUtils;

@Configuration
public class SamlSpIdpConfiguration {

	private String privateKey = getResourceAsString("/server.key");
	private String certificate = getResourceAsString("/server.crt");
	private String passphrase = "saml-sp-idppassword";

	private String getResourceAsString(String name) {
		ClassPathResource resource = new ClassPathResource(name);
		try {
			return StreamUtils.copyToString(resource.getInputStream(), StandardCharsets.UTF_8);
		} catch (IOException e) {
			throw new RuntimeException(e);
		}
	}
}
